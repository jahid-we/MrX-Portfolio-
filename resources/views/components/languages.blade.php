<div class="container px-5 my-5">
    <!-- Main container for the Languages section -->
    <div class="row gx-5 justify-content-center">
        <!-- Row to center the content -->
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <!-- Column for the content, adjusting size based on screen width -->
            <section>
                <!-- Section heading for the Languages -->
                <h2 class="text-secondary fw-bolder mb-4">Languages</h2>

                <!-- Card to display the list of languages -->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <!-- Row to display the language list -->
                        <div id="language-list" class="row row-cols-1 row-cols-md-3 mb-4">
                            <!-- Language list will be dynamically inserted here -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script>
    // Function to fetch language data from the server
    getLanguages();

    async function getLanguages() {
        let URL = 'api/languageData'; // API endpoint to fetch language data
        try {
            showLoader(); // Show loader while fetching data
            const res = await axios.get(URL); // Make GET request to the server
            hideLoader(); // Hide loader once data is fetched

            // Loop through the fetched languages and create HTML elements for each
            res.data.data.forEach((item) => {
                let languageList = document.getElementById('language-list');
                // Dynamically add each language to the language-list div
                languageList.innerHTML += (`
                <div class="col p-2 mb-4 mb-md-0">
                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                       ${item['name']} <!-- Language name -->
                    </div>
                </div>
                `)
            });
        } catch (error) {
            errorToast('Something went wrong'); // Show error message if the request fails
        }
    }
</script>
