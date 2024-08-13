<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource Utilization and ManagementForm</title>
    <link rel="icon" href="assets/image/288962599_408601677857494_1395590741157851249_n.jpg" type="image/x-icon">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
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

.invalid-feedback {
    color: #dc3545;
    font-size: 0.875rem;
    margin-top: 0.25rem;
}

    </style>
    
    
</head>

<body>


    <?php include 'nav.php'; ?>

    <main class="col-md-9 ms-sm-auto common col-lg-10 px-md-4">
    <div class="form-wrapper">
        <div class="form-container">
            <div class="form-title">Insert Resource Utilization and Management Information</div>
            <div class="dot-indicator">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            <form id="resourceManagementForm" action="resource_management_insert.php" method="POST">
                <!-- Step 1 -->
                <div id="step1">
                    <div class="form-group">
                        <h6><i class="fas fa-cogs"></i> Resource Type</h6>
                        <select class="form-control" name="resource_type" required>
                            <option value="" disabled selected>Select resource type</option>
                            <option value="Land">Land</option>
                            <option value="Water">Water</option>
                            <option value="Forest">Forest</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <h6><i class="fas fa-align-left"></i> Usage Description</h6>
                        <textarea class="form-control" name="usage_description" placeholder="Enter usage description" required></textarea>
                    </div>
                    <div class="form-group">
                        <h6><i class="fas fa-user"></i> Responsible Party</h6>
                        <input type="text" class="form-control" name="responsible_party" placeholder="Enter responsible party" required>
                    </div>
                    <button type="button" class="btn-next">Next</button>
                </div>

                <!-- Step 2 -->
                <div id="step2" class="hidden">
                    <div class="form-group">
                        <h6><i class="fas fa-check-circle"></i> Monitoring Body</h6>
                        <input type="text" class="form-control" name="monitoring_body" placeholder="Enter monitoring body" required>
                    </div>
                    <button type="button" class="btn-back">Back</button>
                    <button type="button" class="btn-next">Next</button>
                </div>

                <!-- Step 3 -->
                <div id="step3" class="hidden">
                <div class="form-group">
                        <h6><i class="fas fa-user"></i> Contact Person Name</h6>
                        <input type="text" class="form-control" name="contact_name" id="contact_name" placeholder="Enter contact person name">
                    </div>
                    <div class="form-group">
                        <h6><i class="fas fa-envelope"></i> Contact Person Email</h6>
                        <input type="email" class="form-control" name="contact_email" placeholder="Enter contact person email" required>
                    </div>
                    <div class="form-group">
                        <h6><i class="fas fa-phone"></i> Contact Person Phone Number</h6>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+251</span>
                            </div>
                            <input type="tel" class="form-control" name="contact_phone" placeholder="911121314" aria-label="Phone Number" required>
                        </div>
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
    const nextButtons = document.querySelectorAll('.btn-next');
    const backButtons = document.querySelectorAll('.btn-back');
    const dots = document.querySelectorAll('.dot');

    function validateStep1() {
        let isValid = true;

        // Get step 1 elements
        const resourceType = document.getElementsByName('resource_type')[0];
        const usageDescription = document.getElementsByName('usage_description')[0];
        const responsibleParty = document.getElementsByName('responsible_party')[0];

        // Validation functions
        function validate(field) {
            if (field.value.trim() === '') {
                field.classList.add('is-invalid');
                isValid = false;
            } else {
                field.classList.remove('is-invalid');
            }
        }

        validate(resourceType);
        validate(usageDescription);
        validate(responsibleParty);

        return isValid;
    }

    function validateStep2() {
        let isValid = true;

        // Get step 2 elements
        const monitoringBody = document.getElementsByName('monitoring_body')[0];

        // Validation functions
        function validate(field) {
            if (field.value.trim() === '') {
                field.classList.add('is-invalid');
                isValid = false;
            } else {
                field.classList.remove('is-invalid');
            }
        }

        validate(monitoringBody);

        return isValid;
    }

    function validateStep3() {
        let isValid = true;

        // Get step 3 elements
        const contactEmail = document.getElementsByName('contact_email')[0];
        const contactPhone = document.getElementsByName('contact_phone')[0];

        // Validation functions
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

        function validatePhone(phoneField) {
            const phonePattern = /^\d{9}$/; // Ethiopia phone number format
            if (!phonePattern.test(phoneField.value.trim())) {
                phoneField.classList.add('is-invalid');
                isValid = false;
            } else {
                phoneField.classList.remove('is-invalid');
            }
        }

        validate(contactEmail);
        validateEmail(contactEmail);
        validatePhone(contactPhone);

        return isValid;
    }

    nextButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            if (index === 0) {
                if (validateStep1()) {
                    step1.classList.add('hidden');
                    step2.classList.remove('hidden');
                    dots[0].classList.remove('active');
                    dots[1].classList.add('active');
                } else {
                    alert('Please fill out all fields in Step 1 correctly.');
                }
            } else if (index === 1) {
                if (validateStep2()) {
                    step2.classList.add('hidden');
                    step3.classList.remove('hidden');
                    dots[1].classList.remove('active');
                    dots[2].classList.add('active');
                } else {
                    alert('Please fill out all fields in Step 2 correctly.');
                }
            }
        });
    });

    backButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            if (index === 0) {
                step2.classList.add('hidden');
                step1.classList.remove('hidden');
                dots[1].classList.remove('active');
                dots[0].classList.add('active');
            } else if (index === 1) {
                step3.classList.add('hidden');
                step2.classList.remove('hidden');
                dots[2].classList.remove('active');
                dots[1].classList.add('active');
            }
        });
    });
</script>
</body>
</html>