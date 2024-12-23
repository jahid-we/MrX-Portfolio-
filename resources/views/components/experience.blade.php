<div class="container px-5 my-5">
    <!-- Section Title -->
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
    </div>

    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <!-- Experience Section-->
            <section>
                <!-- Experience Section Header -->
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                    <!-- Button to Download Resume -->
                    <a target="_blank" class="btn btn-primary px-4 py-3" id="CVDownloadLink" href="">
                        <div class="d-inline-block bi bi-download me-2"></div>
                        Download Resume
                    </a>
                </div>

                <!-- Experience List Container -->
                <div id="experience-list">
                    <!-- Experience items will be dynamically added here -->
                </div>
            </section>
        </div>
    </div>
</div>

<script>
    // Function to get the resume download link and set the link in the button
    getResumeLink();

    async function getResumeLink() {
        let URL = 'api/resumeLink'; // API endpoint for getting the resume download link
        try {
            showLoader(); // Show loader while waiting for the data

            // Fetch the resume download link
            const res = await axios.get(URL);

            // Get the download link and update the button's href attribute
            let link = res.data.data[0].downloadLink;
            document.getElementById('CVDownloadLink').setAttribute('href', link);

        } catch (error) {
            errorToast('Something went wrong, please try again later');
        }
    }

    // Function to get the experience data and display it in the experience list
    getExperience();

    async function getExperience() {
        let URL = 'api/experiencesData'; // API endpoint for getting experience data
        try {
            // Fetch the experience data
            const res = await axios.get(URL);

            // Loop through the experience data and generate HTML for each item
            res.data.data.forEach((item) => {
                let experience = document.getElementById('experience-list');

                // Append new experience card for each item in the list
                experience.innerHTML += (`
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <!-- Experience Title and Details -->
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">${item['duration']}</div>
                                        <div class="small fw-bolder">${item['title']}</div>
                                        <div class="small text-muted">${item['designation']}</div>
                                    </div>
                                </div>
                                <div class="col-lg-8"><div>${item['details']}</div></div>
                            </div>
                        </div>
                    </div>
                `);
            });
        } catch (error) {
            errorToast('Something went wrong, please try again later');
        }
    }
</script>
