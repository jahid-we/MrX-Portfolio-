<div class="container px-5 my-5">
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <section>
                <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                <!-- Education Card Section -->
                <div id="education-list">
                    <!-- Education cards will be dynamically added here -->
                </div>
            </section>
        </div>
    </div>
</div>

<script>
    // Call the getEducations function to load education data
    getEducations();

    // Asynchronous function to fetch and display education data
    async function getEducations() {
        let URL = 'api/educationData'; // API endpoint to fetch education data
        try {
            // Sending GET request to fetch data from the API
            const res = await axios.get(URL);

            // Loop through the received education data and generate the HTML for each card
            res.data.data.forEach((item) => {
                // Get the container where the education cards will be added
                let education = document.getElementById('education-list');

                // Append new education card with dynamic data
                education.innerHTML += (`
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">${item['duration']}</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">${item['institutionName']}</div>
                                        </div>
                                        <div class="fst-italic">
                                            <div class="small text-muted">${item['field']}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>${item['details']}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                `);
            });
        }
        catch (error) {
            // Show an error toast if the request fails
            errorToast('Something went wrong, please try again later');
        }
    }
</script>
