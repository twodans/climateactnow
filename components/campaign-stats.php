<?php /* components/form-status.php */ ?>

<template id="campaign-stats-component" v-if="!isLoading">
  <div>
      <div class="wrap">
        <h2>See how support is growing!</h2>
        <div class="stats-wrap">
          <div class="stat-filters">
            <div
                class="filter"
                v-for="(filter, index) in filters"
                :key="'filter_' + index"
            >
              <label @click="selectFilter(filter)" :for="'filter_' + index">{{
                filter.title
                }}</label>
              <div
                  class="filter-content"
                  :class="{ 'filter-content--active': filter === selectedFilter }"
                  :id="'filter_' + index"
              >
                <div v-if="filter.statesActive" class="state">
                  <ul>
                    <li
                        v-for="(state, index) in states"
                        :key="'state_' + index"
                    >
                      <span
                          @click="selectState(state)"
                          :class="{ active: selectedState === state }"
                      >{{ state }}</span
                      >
                    </li>
                  </ul>
                </div>
                <div
                    v-if="filter.electoratesActive && stateElectorates.length"
                    class="electorate act"
                >
                  <select class="select-css" v-model="selectedElectorate">
                    <option
                        v-for="(electorate, index) in stateElectorates"
                        v-bind:value="electorate"
                        v-bind:key="'electorate_' + index"
                    >
                      {{ electorate.electorate }}
                    </option>
                  </select>
                </div>
                <h2>{{ signedUsers | toLocale }}</h2>
                <p>{{ getFilterDesc(filter.type) }}</p>
                <div>
                  <button
                      :disabled="isRefreshing"
                      class="md-primary campaign-stats--refresh-btn btn"
                      @click="getCampaignStats(false)"
                  >
                    Refresh data</button
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>