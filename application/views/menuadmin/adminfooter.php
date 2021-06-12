        <!-- Content Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2021-2021 <a href="#">Grand Master Course</a>.</strong> All rights reserved.
        </footer>
        <!-- Content Footer -->
        </div>
        <!-- ./wrapper -->

        <script src="<?= base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('assets'); ?>/dist/js/adminlte.min.js"></script>
        <!-- date-range-picker -->
        <script src="<?= base_url('assets'); ?>/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?= base_url('assets'); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- jQuery -->
        <script src="<?= base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Select2 -->
        <script src="<?= base_url('assets'); ?>/plugins/select2/js/select2.full.min.js"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="<?= base_url('assets'); ?>/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
        <!-- InputMask -->
        <script src="<?= base_url('assets'); ?>/plugins/moment/moment.min.js"></script>
        <script src="<?= base_url('assets'); ?>/plugins/inputmask/jquery.inputmask.min.js"></script>
        <!-- date-range-picker -->
        <script src="<?= base_url('assets'); ?>/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap color picker -->
        <script src="<?= base_url('assets'); ?>/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?= base_url('assets'); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Bootstrap Switch -->
        <script src="<?= base_url('assets'); ?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
        <!-- BS-Stepper -->
        <script src="<?= base_url('assets'); ?>/plugins/bs-stepper/js/bs-stepper.min.js"></script>
        <!-- dropzonejs -->
        <script src="<?= base_url('assets'); ?>/plugins/dropzone/min/dropzone.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url('assets'); ?>/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url('assets'); ?>/dist/js/demo.js"></script>
        <!-- Page specific script -->
        <script>
            $(function() {
                //Initialize Select2 Elements
                $('.select2').select2()

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })

                //Datemask dd/mm/yyyy
                $('#datemask').inputmask('dd/mm/yyyy', {
                    'placeholder': 'dd/mm/yyyy'
                })
                //Datemask2 mm/dd/yyyy
                $('#datemask2').inputmask('mm/dd/yyyy', {
                    'placeholder': 'mm/dd/yyyy'
                })
                //Money Euro
                $('[data-mask]').inputmask()

                //Date picker
                $('#reservationdate').datetimepicker({
                    format: 'DD/MM/YYYY'
                });

                //Date and time picker
                $('#reservationdatetime').datetimepicker({
                    icons: {
                        time: 'far fa-clock'
                    }
                });

                $('.reservationdateEdit').datetimepicker({
                    format: 'DD/MM/YYYY'
                });

                //Date and time picker
                $('#reservationdatetimeEdit').datetimepicker({
                    icons: {
                        time: 'far fa-clock'
                    }
                });
                //Date range picker
                $('#reservation').daterangepicker()
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({
                    timePicker: true,
                    timePickerIncrement: 30,
                    locale: {
                        format: 'MM/DD/YYYY hh:mm A'
                    }
                })
                //Date range as a button
                $('#daterange-btn').daterangepicker({
                        ranges: {
                            'Today': [moment(), moment()],
                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                        },
                        startDate: moment().subtract(29, 'days'),
                        endDate: moment()
                    },
                    function(start, end) {
                        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                    }
                )

                //Timepicker
                $('#timepicker').datetimepicker({
                    format: 'HH:mm'
                })
                $('#timepickerEdit').datetimepicker({
                    format: 'HH:mm'
                })

                //Bootstrap Duallistbox
                $('.duallistbox').bootstrapDualListbox()

                //Colorpicker
                $('.my-colorpicker1').colorpicker()
                //color picker with addon
                $('.my-colorpicker2').colorpicker()

                $('.my-colorpicker2').on('colorpickerChange', function(event) {
                    $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
                })

                $("input[data-bootstrap-switch]").each(function() {
                    $(this).bootstrapSwitch('state', $(this).prop('checked'));
                })

            })
            // BS-Stepper Init
            document.addEventListener('DOMContentLoaded', function() {
                window.stepper = new Stepper(document.querySelector('.bs-stepper'))
            })

            // DropzoneJS Demo Code Start
            Dropzone.autoDiscover = false

            // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
            var previewNode = document.querySelector("#template")
            previewNode.id = ""
            var previewTemplate = previewNode.parentNode.innerHTML
            previewNode.parentNode.removeChild(previewNode)

            var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
                url: "/target-url", // Set the url
                thumbnailWidth: 80,
                thumbnailHeight: 80,
                parallelUploads: 20,
                previewTemplate: previewTemplate,
                autoQueue: false, // Make sure the files aren't queued until manually added
                previewsContainer: "#previews", // Define the container to display the previews
                clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
            })

            myDropzone.on("addedfile", function(file) {
                // Hookup the start button
                file.previewElement.querySelector(".start").onclick = function() {
                    myDropzone.enqueueFile(file)
                }
            })

            // Update the total progress bar
            myDropzone.on("totaluploadprogress", function(progress) {
                document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
            })

            myDropzone.on("sending", function(file) {
                // Show the total progress bar when upload starts
                document.querySelector("#total-progress").style.opacity = "1"
                // And disable the start button
                file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
            })

            // Hide the total progress bar when nothing's uploading anymore
            myDropzone.on("queuecomplete", function(progress) {
                document.querySelector("#total-progress").style.opacity = "0"
            })

            // Setup the buttons for all transfers
            // The "add files" button doesn't need to be setup because the config
            // `clickable` has already been specified.
            document.querySelector("#actions .start").onclick = function() {
                myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
            }
            document.querySelector("#actions .cancel").onclick = function() {
                myDropzone.removeAllFiles(true)
            }
            // DropzoneJS Demo Code End
        </script>
        <script>
            $(document).ready(function() {

                //var guru = $("#selectMatpel").val();
                //var guru = document.getElementById("selectMatpel").options.item(0).text;
                // var x = document.getElementById("selectMatpel");
                // var i = x.selectedIndex;
                // var guru = x.options[i].text;
                // console.log(guru);
                //var myElement = document.getElementById("intro");
                //console.log(myElement);
                // $("#selectMatpel").change(function() {
                //     var selectedmatpel = $(this).val();
                //     //var guru = document.getElementById(listguru);
                //     if (val == ) {
                //         $("#selectGuru").html("<option value='test'>berakk</option><option value='test2'>ktnll</option>");
                //     }
                //     for (g in guru) {
                //         console.log(g)
                //         $("#selectGuru").html("<option value='test'>$g['namaGuru']</option>");
                //     }
                // });


            });

            function selectMatpelFunc() {
                var x = document.getElementById("selectMatpel");
                var i = x.selectedIndex;
                var selected_guru = x.options[i].text;
                //console.log(selected_guru);
                var e = document.getElementById("selectMatpel").value;
                //document.getElementById("haloo").innerHTML = e;
                //$('#e').attr('value', e);


                //reset();
                //var category = $("#selectMatpel").val();
                $.ajax({
                    type: "GET",
                    url: "http://localhost/Grand-Master-Course/admin/getGuru/" + e,
                    dataType: "json",
                    success: function(data) {
                        $("#selectGuru").html(data.selectedMatpel);
                        //console.log(data.selectedMatpel);
                    },
                    error: function() {
                        alert("Terjadi kesalahan, silakan refresh halaman ini.");
                    },
                });
            }

            $(function() {
                $('#btn-edit').click(function(e) {
                    e.preventDefault();
                    $('#exampleModalEdit').modal({
                        backdrop: 'static',
                        show: true
                    });
                    id = $(this).data('idSiswa');
                    // mengambil nilai data-id yang di click
                    $.ajax({
                        url: 'profile/edit/' + id,
                        success: function(data) {
                            $("input[name='namaSiswaEdit']").val(data.idSiswa);
                            //$("input[name='nama']").val(data.nama);
                            //$("textarea[name='alamat']").val(data.alamat);
                        }
                    });
                });
            })
            //var e = "berski";
            /*
            $(function() {
                $("#category").on("change", function() {
                    reset();
                    var category = $("#category").val();
                    $.ajax({
                        type: "GET",
                        url: "https://0xgigs.com/ajax/getService/" + category,
                        dataType: "json",
                        success: function(data) {
                            $("#service").html(data.msg);
                        },
                        error: function() {
                            alert("Terjadi kesalahan, silakan refresh halaman ini.");
                        },
                    });
                });
            });*/
        </script>
        </body>

        </html>