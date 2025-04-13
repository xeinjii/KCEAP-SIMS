<script>
     document.addEventListener("DOMContentLoaded", function () {
            const editButtons = document.querySelectorAll(".edit-btn");

            editButtons.forEach(button => {
                button.addEventListener("click", function () {
                    document.getElementById("edit-id").value = this.getAttribute("data-id");
                    document.getElementById("edit-name").value = this.getAttribute("data-name");
                    document.getElementById("edit-school").value = this.getAttribute("data-school");
                    document.getElementById("edit-courseYear").value = this.getAttribute("data-courseyear");
                    document.getElementById("edit-brgy").value = this.getAttribute("data-brgy");
                    document.getElementById("edit-phone").value = this.getAttribute("data-phone");
                });
            });
        });


        // Live search functionality
        const searchInput = document.getElementById("searchInput");
        const table = document.getElementById("scholarTable");
        const rows = table.getElementsByTagName("tr");

        searchInput.addEventListener("keyup", function () {
            const filter = searchInput.value.toLowerCase();

            for (let i = 1; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName("td");
                const nameCell = cells[0];

                if (nameCell) {
                    const nameText = nameCell.textContent || nameCell.innerText;
                    if (nameText.toLowerCase().indexOf(filter) > -1) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }
                }
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            var deleteModal = document.getElementById('deleteModal');
            var confirmDelete = document.getElementById('confirmDelete');

            deleteModal.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget;
                var id = button.getAttribute('data-id');
                confirmDelete.href = 'manageCollegeScholar.php?delete=' + id;
            });
        });

</script>