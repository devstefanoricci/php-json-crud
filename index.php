<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
    <script src="./assets/js/myjs.js"></script>

    <title>PHP CRUD Operations with JSON File</title>
</head>

<body>

    <div class="container">
        <h1 class="mt-4 mb-4 text-center text-warning">JSON CRUD operations in PHP | Delete or Remove Data from JSON File</h1>

        <span id="message"></span>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col col-sm-9">Sample Data</div>
                    <div class="col col-sm-3">
                        <button type="button" id="add_data" class="btn btn-success btn-sm float-end">Add</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="sample_data">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<div class="modal" tabindex="-1" id="action_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="sample_form">
                <div class="modal-header">
                    <h5 class="modal-title" id="dynamic_modal_title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" />
                        <span id="first_name_error" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" />
                        <span id="last_name_error" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="number" name="age" id="age" class="form-control" />
                        <span id="age_error" class="text-danger"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="id" />
                    <input type="hidden" name="action" id="action" value="Add" />
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="action_button">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script>

</script>