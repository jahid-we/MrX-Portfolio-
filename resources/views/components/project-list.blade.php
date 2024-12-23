<section class="py-5">
    <div class="container px-5 mb-5">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>

        <!-- Container for the project list -->
        <div class="row gx-5 justify-content-center">
            <div id="project-list" class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Project items will be inserted here -->
            </div>
        </div>
    </div>
</section>

<script>
    // Function to fetch and display projects
    getProjects();

    // Function to fetch project data from the API
    async function getProjects() {
        let URL = '/api/projectsData';  // URL of the API that provides project data

        try {
            // Show loader while fetching data
            showLoader();
            // Fetching the data from the API
            const res = await axios.get(URL);
            // Hide loader once data is fetched
            hideLoader();

            // Extract the "data" array from the response
            let projects = res.data.data;

            // Initialize an empty string to store the HTML structure of projects
            let projectsHTML = '';

            // Loop through each project and create HTML for it
            projects.forEach((item) => {
                projectsHTML += `<div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">${item.title}</h2> <!-- Project Title -->
                                <p>${item.details}</p> <!-- Project Description -->
                                <a class="text-decoration-none" target="_blank" href="${item.previewLink}">View Project</a> <!-- Link to view the project -->
                            </div>
                            <img class="img-fluid h-50 w-80 overflow-hidden" src="${item.thumbnailLink}" alt="Project Thumbnail" /> <!-- Thumbnail of the project -->
                        </div>
                    </div>
                </div>`;
            });

            // Inject the HTML of all projects into the 'project-list' container
            document.getElementById('project-list').innerHTML = projectsHTML;

        } catch (error) {
            // Display error message if something goes wrong
            errorToast('Something went wrong');
        }
    }
</script>
