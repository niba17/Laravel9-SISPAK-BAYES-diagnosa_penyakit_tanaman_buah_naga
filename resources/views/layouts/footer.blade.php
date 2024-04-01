<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
                </div>
                <label class="form-label">Report type</label>
                <div class="form-selectgroup-boxes row mb-3">
                    <div class="col-lg-6">
                        <label class="form-selectgroup-item">
                            <input type="radio" name="report-type" value="1" class="form-selectgroup-input"
                                checked>
                            <span class="form-selectgroup-label d-flex align-items-center p-3">
                                <span class="me-3">
                                    <span class="form-selectgroup-check"></span>
                                </span>
                                <span class="form-selectgroup-label-content">
                                    <span class="form-selectgroup-title strong mb-1">Simple</span>
                                    <span class="d-block text-muted">Provide only basic data needed for the
                                        report</span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-selectgroup-item">
                            <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                            <span class="form-selectgroup-label d-flex align-items-center p-3">
                                <span class="me-3">
                                    <span class="form-selectgroup-check"></span>
                                </span>
                                <span class="form-selectgroup-label-content">
                                    <span class="form-selectgroup-title strong mb-1">Advanced</span>
                                    <span class="d-block text-muted">Insert charts and additional advanced analyses to
                                        be inserted in the report</span>
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label class="form-label">Report url</label>
                            <div class="input-group input-group-flat">
                                <span class="input-group-text">
                                    https://tabler.io/reports/
                                </span>
                                <input type="text" class="form-control ps-0" value="report-01" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label class="form-label">Visibility</label>
                            <select class="form-select">
                                <option value="1" selected>Private</option>
                                <option value="2">Public</option>
                                <option value="3">Hidden</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Client name</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Reporting period</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div>
                            <label class="form-label">Additional information</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Cancel
                </a>
                <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                    Create new report
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Libs JS -->
<script src="{{ asset('template') }}/dist/libs/apexcharts/dist/apexcharts.min.js?1668288743" defer></script>
<script src="{{ asset('template') }}/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1668288743" defer></script>
<script src="{{ asset('template') }}/dist/libs/jsvectormap/dist/maps/world.js?1668288743" defer></script>
<script src="{{ asset('template') }}/dist/libs/jsvectormap/dist/maps/world-merc.js?1668288743" defer></script>


<script src="{{ asset('template') }}/dist/libs/nouislider/dist/nouislider.min.js?1674944800" defer></script>
<script src="{{ asset('template') }}/dist/libs/litepicker/dist/litepicker.js?1674944800" defer></script>
<script src="{{ asset('template') }}/dist/libs/tom-select/dist/js/tom-select.base.min.js?1674944800" defer></script>
<!-- Tabler Core -->
<script src="{{ asset('template') }}/dist/js/tabler.min.js?1668288743" defer></script>
<script src="{{ asset('template') }}/dist/js/demo.min.js?1668288743" defer></script>

<script>
    $(function() {
        $('#datepicker').datepicker();
    });

    $('.card-home').on('mouseenter', function() {
        $(this).css('background-color', '#b3cdf2')
    })

    $('.card-home').on('mouseleave', function() {
        $(this).css('background-color', '')
    })

    $("#kecamatan_id").change(function() {
        var idKecamatan = $(this).val();
        $.ajax({
            url: "{{ route('kecamatan-request') }}",
            method: 'GET',
            cache: false,
            dataType: 'json',
            success: function(data) {
                console.log(data)
                var html = "";
                data[0].forEach(element => {
                    if (element.id == idKecamatan) {
                        if (element.kecamatan_kelurahan !== null) {
                            element.kecamatan_kelurahan.forEach(element => {
                                html += '<option value="' + element.kelurahan
                                    .id + '">' + element.kelurahan.nama +
                                    '</option>'
                            })
                        }
                    }
                })
                $("#kelurahan_id").html(
                    '<option value="" selected disabled>Pilih Kelurahan ...</option>' + html);
            }
        })
    })

    $("#kecamatan_kelurahan_id").change(function() {
        var idKelurahan = $(this).val();
        $.ajax({
            url: "{{ route('kelurahan-request') }}",
            method: 'GET',
            cache: false,
            dataType: 'json',
            success: function(data) {
                console.log(data)
                var html = "";
                data[0].forEach(element => {
                    if (element.id == idKelurahan) {
                        if (element.kecamatan_kelurahan !== null) {
                            data[1].forEach(elementKec => {
                                var valid = true
                                element.kecamatan_kelurahan.forEach(elementKel => {
                                    if (elementKec.id == elementKel
                                        .kecamatan_id) {
                                        valid = false
                                    }
                                })
                                if (valid == false) {
                                    html += '<option class="text-danger" value="' +
                                        elementKec
                                        .id + '"disabled>' + elementKec.nama +
                                        ' (kelurahan sudah ada)</option>'
                                } else {
                                    html += '<option value="' + elementKec
                                        .id + '">' + elementKec.nama +
                                        '</option>'
                                }

                            })
                        }
                    }
                })
                $("#kecamatan_id").html(
                    '<option value="" selected disabled>Pilih Kecamatan ...</option>' + html);
            }
        })
    })

    $("#penyakit_id").change(function() {
        var idPenyakit = $(this).val();
        $.ajax({
            url: "{{ route('gejala-request') }}",
            method: 'GET',
            cache: false,
            dataType: 'json',
            success: function(data) {
                var html = ""
                var gejalaChoosen = []

                data[0].gejala.forEach(element => {

                    data[0].gejala_penyakit.forEach(element2 => {

                        if (idPenyakit == element2.penyakit_id) {
                            if (element.id == element2.gejala_id) {
                                // console.log(element)
                                gejalaChoosen.push(element)
                            }
                        }

                    })

                })
                // console.log(gejalaChoosen)
                data[0].gejala.forEach(element => {

                    var valid = true
                    gejalaChoosen.forEach(element2 => {

                        if (element.id == element2.id) {
                            valid = false
                        }

                    })
                    if (valid == false) {
                        html += '<option class="text-danger" value="' +
                            element.id + '" disabled>' + '(' + element.kode +
                            ') ' +
                            element.nama +
                            ' (sudah dipilih!)</option>'
                    } else {
                        html += '<option value="' +
                            element.id + '">' + '(' + element
                            .kode + ') ' + element.nama +
                            '</option>'
                    }

                })

                $("#gejala_id").html(
                    '<option value="" selected disabled>Pilih Gejala ...</option>' + html);
            }
        })
    })

    $("#penyakit_solusi_id").change(function() {
        var idPenyakit = $(this).val();
        $.ajax({
            url: "{{ route('solusi-request') }}",
            method: 'GET',
            cache: false,
            dataType: 'json',
            success: function(data) {
                var html = ""
                var solusiChoosen = []

                data[0].solusi.forEach(element => {

                    data[0].penyakit_solusi.forEach(element2 => {

                        if (idPenyakit == element2.penyakit_id) {
                            if (element.id == element2.solusi_id) {
                                solusiChoosen.push(element)
                            }
                        }

                    })

                })
                data[0].solusi.forEach(element => {

                    var valid = true
                    solusiChoosen.forEach(element2 => {

                        if (element.id == element2.id) {
                            valid = false
                        }

                    })
                    if (valid == false) {
                        html += '<option class="text-danger" value="' +
                            element.id + '" disabled>' +
                            element.solusi.substring(0, 35) + "  ...  " + element.solusi
                            .trim()
                            .substring(element.solusi.length - 20) +
                            ' (sudah dipilih!)</option>'
                    } else {
                        html += '<option value="' +
                            element.id + '">' + element.solusi.substring(0, 35) +
                            "  ...  " +
                            element.solusi.trim()
                            .substring(element.solusi.length - 20) +
                            '</option>'
                    }

                })

                $("#solusi_id").html(
                    '<option value="" selected disabled>Pilih Solusi ...</option>' + html);
            }
        })
    })

    $('#login').hover(() => {
        $('#login').toggleClass('text-primary')
    })

    $('#myTable').DataTable();
    $('#myTable2').DataTable();
    $('#myTable3').DataTable();

    @if (Session::has('succMessage'))
        Swal.fire({
            icon: 'success',
            title: '{{ Session::get('succMessage') }}',
            timer: 3000
        })
    @elseif (Session::has('errMessage'))
        Swal.fire({
            icon: 'error',
            title: '{{ Session::get('errMessage') }}'
            // timer: 3000
        })
    @elseif (Session::has('warnMessage'))
        Swal.fire({
            icon: 'warning',
            title: '{{ Session::get('warnMessage') }}'
            // timer: 3000
        })
    @endif



    function hapus(id, controller) {
        Swal.fire({
            title: 'Yakin ingin Menghapus?',
            // text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.replace('/' + controller + '-destroy/' + id);
            }
        })
    }

    function logout() {
        Swal.fire({
            title: 'Yakin ingin Logout?',
            // text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Logout!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.replace('/logout');
            }
        })
    }
</script>

{{-- <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
        window.Litepicker && (new Litepicker({
            element: document.getElementById('datepicker-icon-prepend'),
            buttonText: {
                previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
                nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
            },
        }));
    });
    // @formatter:on
</script> --}}


</body>

</html>
