<template>
    <div class="w-full px-2 mb-4">
        <div class="w-full mt-8 border-[1px] border-[green] rounded-lg">
            <div
                class="w-full font-bold text-black text-[20px] bg-gray-100 rounded-lg grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-3 grid-cols-1 gap-2"
            >
                <div class="w-full cursor-pointer px-4 rounded-lg h-full flex">
                    <div
                        class="tab mainTab"
                        :class="{ 'bg-[#437158] text-white': activeTab === 'tab1' }"
                        @click="openTab('tab1')"
                    >
                        <span>Description</span>
                    </div>
                </div>
                <div class="w-full cursor-pointer px-4 rounded-lg h-full flex">
                    <div
                        class="tab mainTab"
                        :class="{ 'bg-[#437158] text-white': activeTab === 'tab2' }"
                        @click="openTab('tab2')"
                    >
                        <span>Ingredients</span>
                    </div>
                </div>
                <div class="w-full cursor-pointer px-4 rounded-lg h-full flex">
                    <div
                        class="tab mainTab"
                        :class="{ 'bg-[#437158] text-white': activeTab === 'tab3' }"
                        @click="openTab('tab3')"
                    >
                        <span>Dosage</span>
                    </div>
                </div>
            </div>

            <div class="w-full bg-white p-4 rounded-lg">
                <div class="tab-content" v-if="activeTab === 'tab1'">
                    <div class="font-bold text-black text-[15px]" v-html="productDetails.description"></div>
                </div>
                <div class="tab-content" v-if="activeTab === 'tab2'">
                    <div class="font-bold text-[green] text-[20px]" v-html="productDetails.ingredients"></div>
                </div>
                <div class="tab-content" v-if="activeTab === 'tab3'">
                    <div class="font-bold text-black text-[15px]" v-html="productDetails.dosage"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        productDetails: {
            type: Object,
            required: true,
        },
    },
    data() {
        return {
            activeTab: 'tab1', // Default active tab
        };
    },
    methods: {
        openTab(tabId) {
            this.activeTab = tabId;
        },
    },
};
</script>

<style scoped>
.tab {
    padding: 6px;
    border: 1px solid #e6e6e6;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
}

.tab:hover {
    border-color: #437158;
}

.mainTab {
    padding: 6px;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
}

.mainTab:hover {
    border-color: #437158;
}
</style>
