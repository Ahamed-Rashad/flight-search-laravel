<link rel="stylesheet" href="{{ asset('assets\css\bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets\css\calenderstyle.css') }}">
<link rel="stylesheet" href="{{ asset('assets\css\rome.css') }}">
<link rel="stylesheet" href="{{ asset('assets\css\styles.css') }}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-typeahead@5.2.0/dist/bootstrap-typeahead.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="correct-sha384-value" crossorigin="anonymous" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
<!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" /> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
<style>
    .modal-content {
        background-color: rgba(0, 0, 0, 0.2);
        color: white !important;
        border: 2px solid white;
        box-shadow: none;
        backdrop-filter: blur(5px);
    }

    .rd-container {
        background-color: rgba(0, 0, 0, 0.2) !important;
        color: white !important;
        backdrop-filter: blur(10px);
    }

    .rd-day-selected {
        background-color: rgba(255, 193, 7, 0.9) !important;
        color: white !important;
    }
</style>

<div class="px-3 text-center text-warning">
    <div class="mt-5">
        <h2>Flight Finder</h2>
        <div class="nav nav-underline card-header-tabs justify-content-center font-weight-bold pb-3" role="tablist">
            <button class="nav-link custom-text-color round-trip active" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-selected="true" onclick="toggleTripType('roundTrip')">
                Round Trip
            </button>

            <button class="nav-link custom-text-color one-way" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-selected="false" onclick="toggleTripType('oneWay')">
                One-Way
            </button>
        </div>
    </div>

    <div class="mt-4">
        <form>
            <div class="form-row justify-content-md-center d-flex">
                <div class="col-sm-2 position-relative">
                    <label for="origin">Origin</label>
                    <input type="text" class="form-control typeahead transparent-style" id="origin" placeholder="Enter origin" autocomplete="off" />
                </div>
                <span class="justify-content-md-center d-flex pt-4 mt-3" onclick="swapOriginDestination()">
                    <i class="bi bi-arrow-down-up rotate-90"></i> <span></span>
                </span>
                <div class="col-sm-2 position-relative pl-3">
                    <label for="destination">Destination</label>
                    <input type="text" class="form-control typeahead transparent-style" id="destination" placeholder="Enter destination" autocomplete="off" />
                </div>

                <div class="col-sm position-relative">
                    <label for="input_from">Departure</label>
                    <input type="text" class="form-control transparent-style" id="input_from" placeholder="Departure Date">
                </div>
                <div class="col-sm position-relative">
                    <label for="input_from">Return</label>
                    <input type="text" class="form-control transparent-style" id="input_to" placeholder="Return Date">
                </div>

                <!-- Button trigger modal -->

                <div class="col-sm justify-content-md-center position-relative">
                    <label for="travelers">Travelers</label>

                    <div class="input-group">
                        <button class="form-control totalTravelersDisplay transparent-style" data-bs-toggle="modal" data-bs-target="#totalTravelersDisplay" type="button">
                            <span style="padding-left: 0.5rem; color: white">
                                <i class="fa fa-male" aria-hidden="true"></i>
                                <span id="adultsCount" onchange="updateAdults()"></span></span>
                            <span style="padding-left: 0.5rem; color: white">
                                <i class="fa-solid fa-baby"></i>
                                <span id="childrenCount" onchange="updateChildrens()"></span></span>
                            <span style="padding-left: 0.5rem; color: white">
                                <i class="fa-sharp fa-solid fa-person-breastfeeding"></i>
                                <span id="infantCount" onchange="updateInfant()"></span></span>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="totalTravelersDisplay" tabindex="-1" role="dialog" aria-labelledby="travelersTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content text-dark" style="max-width: 240px">
                                    <div class="modal-header" style="color: white;">
                                        <h5 class="modal-title justify-content-md-center" id="travelersTitle">
                                            Travelers
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: white;"></button>
                                    </div>
                                    <div class="form-row justify-content-md-center p-3">
                                        <span style="padding-right: 1rem; color: white"><i class="fa fa-male" aria-hidden="true"></i></span>
                                        <label for="adults">Adults</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-info" type="button" onclick="updateAdults(-1)">
                                                    <i class="bi bi-dash"></i>
                                                </button>
                                            </div>
                                            <input type="number" class="form-control text-center" id="adults" value="0" readonly />
                                            <div class="input-group-append">
                                                <button class="btn btn-info" type="button" onclick="updateAdults(1)">
                                                    <i class="bi bi-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row justify-content-md-center p-3">
                                        <span style="padding-right: 1rem; color: white"><i class="fa-solid fa-baby"></i></span>
                                        <label for="children">Children</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-info" type="button" onclick="updateChildrens(-1)">
                                                    <i class="bi bi-dash"></i>
                                                </button>
                                            </div>
                                            <input type="number" class="form-control text-center" id="children" value="0" readonly />
                                            <div class="input-group-append">
                                                <button class="btn btn-info" type="button" onclick="updateChildrens(1)">
                                                    <i class="bi bi-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row justify-content-md-center p-3">
                                        <span style="padding-right: 1rem; color: white"><i class="fa-sharp fa-solid fa-person-breastfeeding"></i></span>
                                        <label for="children">Infant</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-info" type="button" onclick="updateInfant(-1)">
                                                    <i class="bi bi-dash"></i>
                                                </button>
                                            </div>
                                            <input type="number" class="form-control text-center" id="infant" value="0" readonly />
                                            <div class="input-group-append">
                                                <button class="btn btn-info" type="button" onclick="updateInfant(1)">
                                                    <i class="bi bi-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="button" class="btn btn-secondary p-2" data-dismiss="modal" onclick="resetCount()">
                                            Reset
                                        </button>
                                        <button type="button" class="btn btn-primary p-2" onclick="saveChanges()">
                                            OK
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2 position-relative">
                    <label for="cabinClass">Cabin Class</label>
                    <select class="form-control transparent-style" id="cabinClass">
                        <option class="custom-select">Economy</option>
                        <option class="custom-select">Premium Economy</option>
                        <option class="custom-select">Business</option>
                        <option class="custom-select">First</option>
                    </select>
                </div>
            </div>
            <button type="button" class="btn btn-warning mt-3 rounded-pill btn-custom" style="width: 130px">
                <span class="text-white">Search</span>
                <i class="bi bi-airplane rotate-90 text-white" style="padding: 5%"></i>
            </button>

        </form>
    </div>


</div>

<script src="{{ asset('assets\javascript\script.js') }}"></script>
<script src="{{ asset('assets\javascript\jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets\javascript\popper.min.js') }}"></script>
<script src="{{ asset('assets\javascript\bootstrap.min.js') }}"></script>
<script src="{{ asset('assets\javascript\rome.js') }}"></script>
<script src="{{ asset('assets\javascript\main.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js" integrity="sha512-P2Z/b+j031xZuS/nr8Re8dMwx6pNIexgJ7YqcFWKIqCdbjynk4kuX/GrqpQWEcI94PRCyfbUQrjRcWMi7btb0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Set initial state on page load
        toggleTripType('roundTrip');
    });

    const countries = [
        "Afghanistan",
        "Albania",
        "Algeria",
        "Andorra",
        "Angola",
        "Antigua and Barbuda",
        "Argentina",
        "Armenia",
        "Australia",
        "Austria",
        "Azerbaijan",
        "Bahamas",
        "Bahrain",
        "Bangladesh",
        "Barbados",
        "Belarus",
    ];

    $(".typeahead").typeahead({
        source: countries,
        autoSelect: true,
        showHintOnFocus: true,
        items: 4,
    });

    $(document).ready(function() {
        $(".datepicker").datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
        });
    });

    $(function() {

        $('input[name="datefilter"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });

        $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });

        $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });

    });
</script>