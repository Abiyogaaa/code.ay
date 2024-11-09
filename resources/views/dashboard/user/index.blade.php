@extends('dashboard.layout.main')
@section('container')
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="user"></i></div>
                            Users List
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <a class="btn btn-sm btn-light text-primary" href="user-management-groups-list.html">
                            <i class="me-1" data-feather="users"></i>
                            Manage Groups
                        </a>
                        <a class="btn btn-sm btn-light text-primary" href="user-management-add-user.html">
                            <i class="me-1" data-feather="user-plus"></i>
                            Add New User
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-fluid px-4">
        <div class="card">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Groups</th>
                            <th>Joined Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Groups</th>
                            <th>Joined Date</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-1.png" /></div>
                                    Tiger Nixon
                                </div>
                            </td>
                            <td>tiger@email.com</td>
                            <td>Administrator</td>
                            <td>
                                <span class="badge bg-green-soft text-green">Sales</span>
                                <span class="badge bg-blue-soft text-blue">Developers</span>
                                <span class="badge bg-red-soft text-red">Marketing</span>
                                <span class="badge bg-purple-soft text-purple">Managers</span>
                                <span class="badge bg-yellow-soft text-yellow">Customer</span>
                            </td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-2.png" /></div>
                                    Garrett Winters
                                </div>
                            </td>
                            <td>gwinterse@email.com</td>
                            <td>Administrator</td>
                            <td>
                                <span class="badge bg-green-soft text-green">Sales</span>
                                <span class="badge bg-blue-soft text-blue">Developers</span>
                                <span class="badge bg-red-soft text-red">Marketing</span>
                                <span class="badge bg-purple-soft text-purple">Managers</span>
                                <span class="badge bg-yellow-soft text-yellow">Customer</span>
                            </td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-3.png" /></div>
                                    Ashton Cox
                                </div>
                            </td>
                            <td>ashtonc@email.com</td>
                            <td>Registered</td>
                            <td>
                                <span class="badge bg-green-soft text-green">Sales</span>
                                <span class="badge bg-red-soft text-red">Marketing</span>
                            </td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-4.png" /></div>
                                    Cedric Kelly
                                </div>
                            </td>
                            <td>cedrickel@email.com</td>
                            <td>Registered</td>
                            <td>
                                <span class="badge bg-green-soft text-green">Sales</span>
                                <span class="badge bg-purple-soft text-purple">Managers</span>
                            </td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-5.png" /></div>
                                    Airi Satou
                                </div>
                            </td>
                            <td>asatou@email.com</td>
                            <td>Registered</td>
                            <td><span class="badge bg-yellow-soft text-yellow">Customer</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-6.png" /></div>
                                    Brielle Williamson
                                </div>
                            </td>
                            <td>bwilliamson@email.com</td>
                            <td>Registered</td>
                            <td><span class="badge bg-yellow-soft text-yellow">Customer</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-1.png" /></div>
                                    Herrod Chandler
                                </div>
                            </td>
                            <td>harrodc@email.com</td>
                            <td>Registered</td>
                            <td><span class="badge bg-green-soft text-green">Sales</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-2.png" /></div>
                                    Rhona Davidson
                                </div>
                            </td>
                            <td>rhonadavidson@email.com</td>
                            <td>Registered</td>
                            <td>
                                <span class="badge bg-green-soft text-green">Sales</span>
                                <span class="badge bg-purple-soft text-purple">Managers</span>
                            </td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-3.png" /></div>
                                    Colleen Hurst
                                </div>
                            </td>
                            <td>churst@email.com</td>
                            <td>Registered</td>
                            <td><span class="badge bg-blue-soft text-blue">Developers</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-4.png" /></div>
                                    Sonya Frost
                                </div>
                            </td>
                            <td>sfrost@email.com</td>
                            <td>Registered</td>
                            <td><span class="badge bg-yellow-soft text-yellow">Customer</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-5.png" /></div>
                                    Jena Gaines
                                </div>
                            </td>
                            <td>jenagaines@email.com</td>
                            <td>Registered</td>
                            <td><span class="badge bg-yellow-soft text-yellow">Customer</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-6.png" /></div>
                                    Quinn Flynn
                                </div>
                            </td>
                            <td>qflynn@email.com</td>
                            <td>Registered</td>
                            <td>
                                <span class="badge bg-green-soft text-green">Sales</span>
                                <span class="badge bg-purple-soft text-purple">Managers</span>
                            </td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-1.png" /></div>
                                    Charde Marshall
                                </div>
                            </td>
                            <td>chardmarsh@email.com</td>
                            <td>Registered</td>
                            <td><span class="badge bg-green-soft text-green">Sales</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-2.png" /></div>
                                    Haley Kennedy
                                </div>
                            </td>
                            <td>hkennedy@email.com</td>
                            <td>Registered</td>
                            <td><span class="badge bg-yellow-soft text-yellow">Customer</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-3.png" /></div>
                                    Tatyana Fitzpatrick
                                </div>
                            </td>
                            <td>tatfitz@email.com</td>
                            <td>Registered</td>
                            <td><span class="badge bg-yellow-soft text-yellow">Customer</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-4.png" /></div>
                                    Michael Silva
                                </div>
                            </td>
                            <td>michaelsilva@email.com</td>
                            <td>Registered</td>
                            <td><span class="badge bg-blue-soft text-blue">Developers</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-5.png" /></div>
                                    Paul Byrd
                                </div>
                            </td>
                            <td>pbyrd@email.com</td>
                            <td>Registered</td>
                            <td><span class="badge bg-yellow-soft text-yellow">Customer</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-6.png" /></div>
                                    Gloria Little
                                </div>
                            </td>
                            <td>glorialittle@email.com</td>
                            <td>Registered</td>
                            <td>
                                <span class="badge bg-blue-soft text-blue">Developers</span>
                                <span class="badge bg-purple-soft text-purple">Managers</span>
                            </td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-1.png" /></div>
                                    Bradley Greer
                                </div>
                            </td>
                            <td>bgreer@email.com</td>
                            <td>Registered</td>
                            <td><span class="badge bg-yellow-soft text-yellow">Customer</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-2.png" /></div>
                                    Dai Rios
                                </div>
                            </td>
                            <td>drios@email.com</td>
                            <td>Registered</td>
                            <td><span class="badge bg-blue-soft text-blue">Developers</span></td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
