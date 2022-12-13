@extends('layouts.app')

@section('content')
    <div id="app">


        {{-- search --}}

        <section class="content mt-2">
            <div class="container-fluid">

                {{-- <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Filter By</h3>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" v-model="slot_type_title"
                                        id="exampleInputEmail1" placeholder="Title">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="slot_type_status" class="form-label"><strong> Status
                                        </strong><span style="color:red"></span></label>
                                    <select v-model="slot_type_status" class="form-control"
                                        v-validate.initial="slot_type_status" data-rules="required">
                                        <option value="" selected>-Select-</option>
                                        <option value="active">
                                            ACTIVE</option>
                                        <option value="inactive">
                                            INACTIVE
                                        </option>
                                    </select>


                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="card-footer">
                        <button v-on:click="resetFilter()" class="btn btn-secondary float-right ">Reset</button>
                        <button v-on:click="getUsersList()" class="btn btn-primary float-right mr-2">Search</button>


                    </div>

                </div> --}}



                {{-- search end --}}



                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>Slot Type List</b></h3>
                        <div class="float-right">
                            {{-- <button type="button" v-on:click="popupModal(0)" class="btn btn-round btn-info">Add
                                New</button> --}}
                        </div>
                    </div>


                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Roles</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr v-for="(data,index) in usersList">

                                    <td>@{{ index + 1 }}</td>

                                    <td>@{{ data.name }} </td>
                                    <td>@{{ data.email }}</td>
                                    <td>@{{ data.role}}</td>
                                    <td v-if="data.status == 'active'">
                                        <span  class="badge rounded-pill bg-success" >Active</span>
                                    </td>
                                    <td v-if="data.status == 'inactive'">
                                        <span class="badge rounded-pill bg-danger" >Inactive</span>
                                    </td>
                                    <td class="project-actions  ">
                                        <a class="btn btn-info btn-sm" v-on:click="popupModal(data)">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>

        <modal name="Test" height="auto" width='800' height="auto" :adaptive="true" :draggable="false"
            :shiftX="0.6" :clickToClose="false" :scrollable="true">
            <div class="modal-header">
                <button type="button" class="close" v-on:click="closeModal">&times;</button>

            </div>
            <div class="modal-body">
                <form @submit.prevent="validateBeforeSubmit" v-if="!formSubmitted" method="post">
                    <div class="row">




                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="slot_type_title" class="form-label"><strong>Slot Type Title</strong><span
                                        style="color:red">*</span></label>
                                <input type="text" class="form-control" v-model="slot_type_title"
                                    data-rules="required|slot_type_title" id="slot_type_title" value="" placeholder="Title">
                                <span v-if="formErrors['slot_type_title']" class="error text-danger">@{{ formErrors['slot_type_title'] }}</span>
                                <p class="text-danger" v-if="errors.has('slot_type_title')">@{{ errors.first('slot_type_title') }}</p>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="slot_type_priority" class="form-label"><strong>Priority</strong><span
                                        style="color:red">*</span></label>
                                <input type="number" class="form-control" v-model="slot_type_priority"
                                    data-rules="required|slot_type_priority" id="slot_type_priority" value=""
                                    placeholder="Enter priority">
                                <span v-if="formErrors['slot_type_priority']"
                                    class="error text-danger">@{{ formErrors['slot_type_priority'] }}</span>
                                <p class="text-danger" v-if="errors.has('slot_type_priority')">@{{ errors.first('slot_type_priority') }}</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="slot_type_status" class="form-label"><strong>Turf Status
                                    </strong><span style="color:red">*</span></label>
                                <select v-model="slot_type_status" class="form-control" v-validate.initial="slot_type_status"
                                    data-rules="required">
                                    <option value="" selected>-Select-</option>
                                    <option value="active">
                                        ACTIVE</option>
                                    <option value="inactive">
                                        INACTIVE
                                    </option>
                                </select>

                                <span v-if="formErrors['slot_type_status']"
                                    class="error text-danger">@{{ formErrors['slot_type_status'] }}</span>
                                <p class="text-danger" v-if="errors.has('slot_type_status')">@{{ errors.first('slot_type_status') }}</p>
                            </div>
                        </div>



                    </div>
                    <br>
                    <div class="row text-right" style="padding-left:150px">
                        <div class="col-sm-6">
                            <button class="btn btn-primary" v-on:click="closeModal()" type="button">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>




                </form>
            </div>
        </modal>




    </div>

    <script>
        Vue.use(window["vue-js-modal"].default);
        var app = new Vue({
            el: '#app',


            data: {

                loading: false,

                base_url: "{{ url('/') }}",

                userList: [],
                roles: [],
                usersList: [],

                url: '',
                formSubmitted: false,

                search: '',
                page_length: '10',

                pagination: {
                    total: 0,
                    per_page: 2,
                    from: 1,
                    to: 0,
                    current_page: 1
                },
                offset: 4,
                formErrors: {},
                //

                member_id: '',
                user_status: '',


                slot_type_id: '',
                slot_type_title: '',
                slot_type_priority: '',
                slot_type_status: '',
                imageSrc: '',






            },

            //

            computed: {
                isActived: function() {
                    return app.pagination.current_page;
                },
                pagesNumber: function() {
                    if (!this.pagination.to) {
                        return [];
                    }
                    var from = this.pagination.current_page - this.offset;
                    if (from < 1) {
                        from = 1;
                    }
                    var to = from + (this.offset * 2);
                    if (to >= this.pagination.last_page) {
                        to = this.pagination.last_page;
                    }
                    var pagesArray = [];
                    while (from <= to) {
                        pagesArray.push(from);
                        from++;
                    }
                    return pagesArray;
                }


            },

            //

            methods: {

                validateBeforeSubmit(e) {
                    this.$validator.validateAll();
                    if (!this.errors.any()) {
                        this.submitForm()
                    }
                },
                submitForm() {
                    this.addEditSubmitForm()
                },

                handleChange(e) {
                    console.log(this.role)
                },
                handleChangePage(e) {
                    console.log(this.page_length)
                    app.getUserList();
                },

                closeModal: function() {
                    app.slot_type_id = '';
                    app.slot_type_title = '';
                    app.slot_type_priority = '';
                    app.slot_type_status = '';
                    app.imageSrc = '';



                    app.$modal.hide('Test');
                    app.getUsersList();

                },


                addEditSubmitForm: function() {

                    axios.post(this.base_url + "/admin/add_edit_slot_type", {
                        "slot_type_id": this.slot_type_id,
                        "slot_type_title": this.slot_type_title,
                        "slot_type_priority": this.slot_type_priority,
                        "slot_type_status": this.slot_type_status,


                    }).then(function(response) {
                        if (response.data.errorcode == 0) {
                            app.loading = false;

                            Vue.$toast.success(response.data.errormessage, 'Success Alert');

                            app.slot_type_id = '';
                            app.slot_type_title = '';
                            app.slot_type_status = '';
                            app.slot_type_priority = '';




                            app.formSubmitted = true;
                            app.formErrors = {};
                            app.$modal.hide('Test');
                            app.getUsersList();

                        } else {
                            app.loading = false;
                            Vue.$toast.error('Something went wrong.', 'Danger Alert');

                            app.$modal.hide('Test');
                            app.getUsersList();


                        }

                    });


                },
                popupModal: function(dataArray) {
                    if (dataArray.slot_type_id > 0) {


                        app.slot_type_id = dataArray.slot_type_id;
                        app.slot_type_title = dataArray.slot_type_title;
                        app.slot_type_status = dataArray.slot_type_status;
                        app.slot_type_priority = dataArray.slot_type_priority;



                        app.formSubmitted = false;
                        app.formErrors = {};

                        app.$modal.show('Test');


                    } else {


                        app.slot_type_id = '';
                        app.slot_type_title = '';
                        app.turf_location = '';
                        app.turf_latitude = '';
                        app.slot_type_priority = '';


                        app.slot_type_status = '';
                        app.imageSrc = '';

                        app.formSubmitted = false;
                        app.formErrors = {};
                        app.$modal.show('Test');

                    }
                },

                uploadImage: function() {

                    var file = document
                        .querySelector('input[type=file]')
                        .files[0];
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        app.imageSrc = e.target.result
                    };
                    reader.onerror = function(error) {
                        alert(error);
                    };
                    reader.readAsDataURL(file);
                },





                resetFilter: function() {
                    app.slot_type_title = '';
                    app.slot_type_status = '';
                    app.getUsersList();
                },
                //
                changePage: function(page) {
                    this.pagination.current_page = page;
                    app.getUserList(page);
                },
                //

                handleMemberChange(e) {
                    console.log(this.member_id);
                    axios.post(this.base_url + "/users-member-list", {
                        "member_id": this.member_id
                    }).then(function(response) {
                        console.log(response.data);
                        app.name = response.data.member_first_name + " " + response.data.member_last_name;
                        app.email = response.data.member_email;
                    });
                },
                isDisabled() {
                    // evaluate whatever you need to determine disabled here...
                    return true;
                },

                getUsersList: function() {
                    axios.post(this.base_url + "/admin/users-list", {
                        // 'slot_type_title': this.slot_type_title,
                        // 'slot_type_status': this.slot_type_status,

                    }).then(function(response) {


                        app.usersList = response.data.data.data;


                    });

                },

            },

            mounted() {
                this.getUsersList();

            }
        });
    </script>
@endsection
