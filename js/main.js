// main.js

Vue.component('campaign-stats', {
  template: '#campaign-stats-component',
  data() {
    return {
      apiUrl: 'https://api.climateactnow.com.au/api/',
      isLoading: true,
      isRefreshing: false,
      campaignStats: [],
      stateElectorates: [],
      selectedState: undefined,
      selectedElectorate: undefined,
      selectedFilter: undefined,
      fadeColor: "#14b8cd",
      filters: [
        {
          type: "all",
          title: "All signups",
          statesActive: false,
          electoratesActive: false
        },
        {
          type: "au",
          title: "Australia",
          statesActive: false,
          electoratesActive: false
        },
        {
          type: "int",
          title: "International",
          statesActive: false,
          electoratesActive: false
        },
        {
          type: "state",
          title: "By state",
          statesActive: true,
          electoratesActive: false
        },
        {
          type: "electorate",
          title: "By electorate",
          statesActive: true,
          electoratesActive: true
        }
      ]
    };
  },
  methods: {
    getCampaignStats(isInitial = true) {
      if (isInitial) {
        this.isLoading = true;
        var promises = [];
        promises.push(this.getElectorates());
        promises.push(this.getStatistics());

        return axios
          .all(promises)
          .then(
            axios.spread((...responses) => {
              this.processElectorates(responses[0]);
              this.processStatistic(responses[1]);
            })
          )
          .finally(() => {
            this.isLoading = false;
          });
      } else {
        this.isRefreshing = true;
        return axios
          .get(this.apiUrl + "statistic")
          .then(statisticResponse => {
            if (statisticResponse.data && statisticResponse.data.data) {
              this.processStatistic(statisticResponse);
            }
          })
          .finally(() => {
            this.isRefreshing = false;
          });
      }
    },
    getStatistics() {
      return axios.get(this.apiUrl + "statistic");
    },
    getElectorates() {
      return axios.get(this.apiUrl + "electorate");
    },
    processElectorates(electoratesResponse) {
      if (electoratesResponse.data && electoratesResponse.data.data) {
        var electoratesList = electoratesResponse.data.data.map(function (electorate) {
          return {
            id: electorate.id,
            preferredName: electorate.preferred_name,
            email: electorate.email,
            electorate: electorate.electorate,
            state: electorate.state,
            twitter: electorate.twitter,
            fbook: electorate.fbook
          };
        });
        electoratesList = electoratesList.sort(function(a, b){
          if(a.electorate < b.electorate) { return -1; }
          if(a.electorate > b.electorate) { return 1; }
          return 0;
        });

        this.electoratesList = electoratesList.reduce(function(rv, x) {
          (rv[x['state']] = rv[x['state']] || []).push(x);
          return rv;
        }, {});
      }
    },
    processStatistic(statisticResponse) {
      if (statisticResponse.data && statisticResponse.data.data) {
        this.campaignStats = statisticResponse.data.data;
      }
    },
    selectState(state) {
      this.selectedState = state;
      if (this.selectedFilter.electoratesActive && this.selectedState) {
        this.stateElectorates = this.electoratesList[this.selectedState];
        this.selectedElectorate = this.stateElectorates[0];
      } else {
        this.stateElectorates = [];
        this.selectedElectorate = undefined;
      }
    },
    selectFilter(filter) {
      this.selectedFilter = filter;
      if (this.selectedFilter.type === "electorate") {
        this.selectState(this.selectedState);
      }
    },
    getFilterDesc(type) {
      let res = "";
      switch (type) {
        case "au":
          res = "people in Australia support the Climate Change Act";
          break;
        case "int":
          res = "people outside Australia support the Climate Change Act";
          break;
        case "state":
          res =
            "people in " +
            this.selectedState +
            " support the Climate Change Act";
          break;
        case "electorate":
          res =
            "people in " +
            (this.selectedElectorate
              ? this.selectedElectorate.electorate
              : undefined) +
            " support the Climate Change Act";
          break;
        default:
          res = "people support the Climate Change Act";
      }
      return res;
    }
  },
  filters: {
    toLocale(n) {
      return !isNaN(Number(n)) ? Number(n).toLocaleString() : 0;
    }
  },
  computed: {
    states() {
      return ["NSW", "VIC", "QLD", "WA", "SA", "TAS", "ACT", "NT"];
    },
    signedUsers() {
      let res = 0;
      if (this.selectedFilter) {
        switch (this.selectedFilter.type) {
          case "all":
            res = this.campaignStats.total;
            break;
          case "au":
            res = this.campaignStats.au;
            break;
          case "int":
            res = this.campaignStats.international;
            break;
          case "state":
            res = this.selectedState
              ? this.campaignStats.groupedByStates[this.selectedState]
              : 0;
            break;
          case "electorate":
            res = this.selectedElectorate
              ? this.campaignStats.groupedByElectorates[
                this.selectedElectorate.id
                ]
              : 0;
            break;
          default:
            res = "people support the Climate Change Act";
        }
      }
      return res;
    }
  },
  mounted() {
    this.selectedFilter = this.filters[0];
    this.selectState(this.states[0]);
    this.getCampaignStats();
  }
});

// make sure to initialize Vue after registering all components
new Vue({
  el: document.getElementById('site-wrapper')
})



