<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- SweetAlert2 js -->
<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

<!-- getAllName -->
<script>
function getAllName(url, target) {
    $.ajax({
        url: url,
        method: "post",
        headers: {
            '<?= csrf_header() ?>': '<?= csrf_hash() ?>',
        },
        success: function (data) {
            Return_data = JSON.parse(data);

            /* <div class="row"> */
            row = document.createElement('div');
            row.classList.add("row");

            for (i = 0; i < Return_data.length; i++) {
                /* <div class="form-check col"> */
                col = document.createElement('div');
                col.classList.add('form-check', 'col-auto');

                /* <input class="form-check-input" type="checkbox" id="xxx"> */
                input = document.createElement('input');
                input.classList.add('form-check-input');
                input.type = 'checkbox';
                input.id = Return_data[i].replaceAll(' ', '_');

                col.appendChild(input);

                /* <label class="form-check-label text-nowrap" for="xxx">xxx</label> */
                label = document.createElement('label');
                label.classList.add('form-check-label','text-nowrap');
                label.setAttribute('for', Return_data[i].replaceAll(' ', '_'));
                label.innerText = Return_data[i];

                col.appendChild(label);

                // Append to row
                row.appendChild(col);
            }

            $(target).html(row);
        }
    });
}
</script>