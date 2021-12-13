<template>
    <section class="flex justify-center mt-20 mb-20 mx-auto w-3/4">
        <div class="text-center p-4 sm:justify-between sm:p-12 bg-primary-100 rounded-md w-3/4">
            <h1 class="text-4xl font-bold text-primary-500 mb-5">URL Redirect Checker</h1>
            <div class="text-2xl font-semibold flex justify-center">
                <input
                    class="rounded-md px-4 focus:outline-none border border-gray-500 focus:border-primary-600 w-3/6"
                    type="text"
                    placeholder="https://domain.com"
                    v-model="domainName"
                >
                <button
                    @click="getRedirects"
                    class="bg-primary-600 hover:bg-primary-700 text-white rounded-md px-4 py-2 cursor-pointer ml-5"
                >Trace URL</button>
            </div>
            {{ redirects }}
        </div>
    </section>
</template>

<script>
export default {
    data: function() {
        return {
            redirectDetectiveServiceURL: 'https://service.redirectinfo.com',
            domainName: null,
            redirects: null,
        }
    },
    mounted() {
        // console.log('Example component mounted.')
    },
    methods: {
        getRedirects() {
            if (!this.domainName) { return false; }

            axios
                .get(this.redirectDetectiveServiceURL + '?site=' + this.domainName)
                .then(response => (this.redirects = response));
        },
    }
}
</script>
