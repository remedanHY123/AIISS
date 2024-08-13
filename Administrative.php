<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrative Support Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <link rel="icon" href="assets/image/288962599_408601677857494_1395590741157851249_n.jpg" type="image/x-icon">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .form-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 65vh;
        }

        .form-container {
            background-color: #fff;
            padding: 3rem;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            width: 700px;
            max-width: 100%;
            position: relative;
        }

        .form-title {
            text-align: center;
            font-size: 2rem;
            color: #28a745;
            margin-bottom: 1.5rem;
            font-weight: bold;
            font-family: 'Times New Roman';
        }

        .dot-indicator {
            display: flex;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .dot-indicator span {
            width: 10px;
            height: 10px;
            background-color: #ccc;
            border-radius: 50%;
            margin: 0 5px;
        }

        .dot-indicator .active {
            background-color: #28a745;
        }

        .form-group {
            margin-bottom: 1rem;
            position: relative;
            font-family: 'Open Sans', sans-serif;
        }

        .form-group h6 {
            margin-bottom: 0.5rem;
        }

        .form-control {
            border-radius: 10px;
            padding: 10px 15px;
        }

        .dropdown-icon {
            position: absolute;
            top: 35px;
            right: 15px;
            pointer-events: none;
        }

        .btn-next,
        .btn-back,
        .btn-submit {
            background-color: #191e3a;
            color: #fff;
            font-weight: bold;
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            margin-top: 1rem;
            border: none;
            transition: background-color 0.3s;
            font-size: 20px;
        }

        .btn-next:hover,
        .btn-back:hover,
        .btn-submit:hover {
            background-color: #218838;
        }

        .hidden {
            display: none;
        }

        .fas {
            color: #28a745;
        }

        .is-invalid {
            border-color: #dc3545;
        }
    </style>
</head>

<body>


<?php include 'nav.php'; ?>


    <main class="col-md-9 ms-sm-auto common col-lg-10 px-md-4">
        <div class="form-wrapper">
            <div class="form-container">
                <div class="form-title">Administrative Support Form</div>
                <div class="dot-indicator">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <form id="adminSupportForm" action="admin_support.php" method="POST">
                    <div id="step1">
                        <div class="form-group">
                            <h6><i class="fas fa-building"></i> Department Name</h6>
                            <input type="text" class="form-control" name="department_name" placeholder="Enter department name">
                        </div>
                        <div class="form-group">
                            <h6><i class="fas fa-cogs"></i> Services Offered</h6>
                            <textarea class="form-control" name="services_offered" placeholder="Enter services offered"></textarea>
                        </div>
                        <button type="button" class="btn-next">Next</button>
                    </div>

                    <div id="step2" class="hidden">
                        <div class="form-group">
                            <h6><i class="fas fa-user"></i> Contact Person</h6>
                            <input type="text" class="form-control" name="contact_person" placeholder="Enter contact person name">
                        </div>
                        <div class="form-group">
                            <h6><i class="fas fa-envelope"></i> Contact Info</h6>
                            <input type="email" class="form-control" name="contact_info" placeholder="Enter contact email">
                        </div>
                        <button type="button" class="btn-back">Back</button>
                        <button type="button" class="btn-next">Next</button>
                    </div>

                    <div id="step3" class="hidden">
                        <div class="form-group">
                            <h6><i class="fas fa-map-marker-alt"></i> Location</h6>
                            <input type="text" class="form-control" name="location" placeholder="Enter office address">
                        </div>
                        <div class="form-group">
                            <h6><i class="fas fa-clock"></i> Operational Hours</h6>
                            <input type="text" class="form-control" name="operational_hours" placeholder="Enter operational hours">
                        </div>
                        <button type="button" class="btn-back">Back</button>
                        <button type="button" class="btn-next">Next</button>
                    </div>

                    <div id="step4" class="hidden">
                        <div class="form-group">
                            <h6><i class="fas fa-globe"></i> Website</h6>
                            <input type="url" class="form-control" name="website" placeholder="Enter website URL">
                        </div>
                        <button type="button" class="btn-back">Back</button>
                        <button type="submit" class="btn-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script>
        const step1 = document.getElementById('step1');
        const step2 = document.getElementById('step2');
        const step3 = document.getElementById('step3');
        const step4 = document.getElementById('step4');
        const nextButtons = document.querySelectorAll('.btn-next');
        const backButtons = document.querySelectorAll('.btn-back');
        const dots = document.querySelectorAll('.dot');

        function validateStep1() {
            let isValid = true;
            const departmentName = document.getElementsByName('department_name')[0];
            const servicesOffered = document.getElementsByName('services_offered')[0];

            function validate(field) {
                if (field.value.trim() === '') {
                    field.classList.add('is-invalid');
                    isValid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            }

            validate(departmentName);
            validate(servicesOffered);

            return isValid;
        }

        function validateStep2() {
            let isValid = true;
            const contactPerson = document.getElementsByName('contact_person')[0];
            const contactInfo = document.getElementsByName('contact_info')[0];

            function validate(field) {
                if (field.value.trim() === '') {
                    field.classList.add('is-invalid');
                    isValid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            }

            function validateEmail(emailField) {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(emailField.value.trim())) {
                    emailField.classList.add('is-invalid');
                    isValid = false;
                } else {
                    emailField.classList.remove('is-invalid');
                }
            }

            validate(contactPerson);
            validateEmail(contactInfo);

            return isValid;
        }

        function validateStep3() {
            let isValid = true;
            const location = document.getElementsByName('location')[0];
            const operationalHours = document.getElementsByName('operational_hours')[0];

            function validate(field) {
                if (field.value.trim() === '') {
                    field.classList.add('is-invalid');
                    isValid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            }

            validate(location);
            validate(operationalHours);

            return isValid;
        }

        function validateStep4() {
            let isValid = true;
            const website = document.getElementsByName('website')[0];

            function validateURL(urlField) {
                try {
                    new URL(urlField.value.trim());
                } catch (_) {
                    urlField.classList.add('is-invalid');
                    isValid = false;
                }
            }

            validateURL(website);

            return isValid;
        }

        nextButtons.forEach(button => {
            button.addEventListener('click', function () {
                if (step1.classList.contains('hidden')) {
                    if (step2.classList.contains('hidden')) {
                        if (step3.classList.contains('hidden')) {
                            if (!validateStep4()) return;
                        } else if (!validateStep3()) {
                            return;
                        }
                    } else if (!validateStep2()) {
                        return;
                    }
                } else if (!validateStep1()) {
                    return;
                }

                if (step1.classList.contains('hidden')) {
                    step1.classList.add('hidden');
                    step2.classList.remove('hidden');
                    dots[0].classList.remove('active');
                    dots[1].classList.add('active');
                } else if (step2.classList.contains('hidden')) {
                    step2.classList.add('hidden');
                    step3.classList.remove('hidden');
                    dots[1].classList.remove('active');
                    dots[2].classList.add('active');
                } else if (step3.classList.contains('hidden')) {
                    step3.classList.add('hidden');
                    step4.classList.remove('hidden');
                    dots[2].classList.remove('active');
                    dots[3].classList.add('active');
                }
            });
        });

        backButtons.forEach(button => {
            button.addEventListener('click', function () {
                if (step4.classList.contains('hidden')) {
                    step4.classList.add('hidden');
                    step3.classList.remove('hidden');
                    dots[3].classList.remove('active');
                    dots[2].classList.add('active');
                } else if (step3.classList.contains('hidden')) {
                    step3.classList.add('hidden');
                    step2.classList.remove('hidden');
                    dots[2].classList.remove('active');
                    dots[1].classList.add('active');
                } else if (step2.classList.contains('hidden')) {
                    step2.classList.add('hidden');
                    step1.classList.remove('hidden');
                    dots[1].classList.remove('active');
                    dots[0].classList.add('active');
                }
            });
        });
    </script>
</body>

</html>
