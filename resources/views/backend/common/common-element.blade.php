@extends('backend.layouts.app')

@section('content')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title">
                            <h3 class="card-label">Local Datasource
                                <span class="text-muted pt-2 font-size-sm d-block">Javascript array as data source</span></h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Dropdown-->
                            <div class="dropdown dropdown-inline mr-2">
                                <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
															<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>Export</button>
                                <!--begin::Dropdown Menu-->
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <!--begin::Navigation-->
                                    <ul class="navi flex-column navi-hover py-2">
                                        <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-print"></i>
																</span>
                                                <span class="navi-text">Print</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-copy"></i>
																</span>
                                                <span class="navi-text">Copy</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-excel-o"></i>
																</span>
                                                <span class="navi-text">Excel</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-text-o"></i>
																</span>
                                                <span class="navi-text">CSV</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-pdf-o"></i>
																</span>
                                                <span class="navi-text">PDF</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                                <!--end::Dropdown Menu-->
                            </div>
                            <!--end::Dropdown-->
                            <!--begin::Button-->
                            <a href="#" class="btn btn-primary font-weight-bolder">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<circle fill="#000000" cx="9" cy="15" r="6" />
														<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>New Record</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Search Form-->
                        <!--begin::Search Form-->
                        <div class="mb-7">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-xl-8">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="input-icon">
                                                <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                                <span>
																	<i class="flaticon2-search-1 text-muted"></i>
																</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="d-flex align-items-center">
                                                <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                                <select class="form-control" id="kt_datatable_search_status">
                                                    <option value="">All</option>
                                                    <option value="1">Pending</option>
                                                    <option value="2">Delivered</option>
                                                    <option value="3">Canceled</option>
                                                    <option value="4">Success</option>
                                                    <option value="5">Info</option>
                                                    <option value="6">Danger</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="d-flex align-items-center">
                                                <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                                <select class="form-control" id="kt_datatable_search_type">
                                                    <option value="">All</option>
                                                    <option value="1">Online</option>
                                                    <option value="2">Retail</option>
                                                    <option value="3">Direct</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                    <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                                </div>
                            </div>
                        </div>
                        <!--end::Search Form-->
                        <!--end: Search Form-->
                        <!--begin: Datatable-->
                        <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <h3 class="card-title">
                            Base Controls
                        </h3>
                    </div>
                    <div class="card-body pb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Input</label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Disabled Input</label>
                                    <input class="form-control" disabled="disabled" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select</label>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Disabled select</label>
                                    <select class="form-control" disabled="disabled">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleTextarea">Textarea</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleTextarea">Disabled textarea</label>
                                    <textarea class="form-control" disabled="disabled" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>File Browser</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" />
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>File Browser</label>
                                    <div class="custom-file">
                                        <input type="file" disabled="disabled" class="custom-file-input" id="customFile" />
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <h3 class="card-title">Input Sizing</h3>
                    </div>
                    <div class="card-body pb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Large Input</label>
                                    <input type="email" class="form-control form-control-lg" placeholder="Large input" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Default Input</label>
                                    <input type="email" class="form-control" placeholder="Large input" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Small Input</label>
                                    <input type="email" class="form-control form-control-sm" placeholder="Large input" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectl">Large Select</label>
                                    <select class="form-control form-control-lg" id="exampleSelectl">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Default Select</label>
                                    <select class="form-control" id="exampleSelectd">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelects">Small Select</label>
                                    <select class="form-control form-control-sm" id="exampleSelects">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <h3 class="card-title">Input Groups</h3>
                    </div>
                    <div class="card-body pb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Left Addon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                                        <input type="text" class="form-control" placeholder="Email" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Right Addon</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon2" />
                                        <div class="input-group-append"><span class="input-group-text">@example.com</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Joint Addons</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                            <span class="input-group-text">0.00</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Left & Right Addons</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">#</span></div>
                                        <input type="text" class="form-control" placeholder="Units" />
                                        <div class="input-group-append"><span class="input-group-text">px</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Icon Left Addon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-exclamation-triangle icon-lg"></i></span></div>
                                        <input type="text" class="form-control" placeholder="Email" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Icon Right Addon</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2" />
                                        <div class="input-group-append"><span class="input-group-text"><i class="la la-group icon-lg"></i></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Icon Joint Addons</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="0.00" aria-label="Amount (to the nearest dollar)" />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="la la-registered"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Left Checkbox Addon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <label class="checkbox checkbox-single checkbox-success">
                                                    <input type="checkbox" checked="" />
                                                    <span></span>
                                                </label>
                                            </span>
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Right Checkbox Addon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <label class="checkbox checkbox-single checkbox-primary">
                                                    <input type="checkbox" checked="" />
                                                    <span></span>
                                                </label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Left Radio Addon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <label class="radio radio-single radio-success">
                                                    <input type="radio" checked="" />
                                                    <span></span>
                                                </label>
                                            </span>
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with radio" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Right Radio Addon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with radio" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <label class="radio radio-single radio-primary">
                                                    <input type="radio" checked="" />
                                                    <span></span>
                                                </label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Left Addon Button</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-secondary" type="button">Go!</button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search for..." />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Right Addon Button</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for..." />
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="button">Go!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Left Button Dropdown</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with dropdown button" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Right Button Dropdown</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-label="Text input with dropdown button" />
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <h3 class="card-title">Select</h3>
                    </div>
                    <div class="card-body pb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Selectpicker</label>
                                    <select class="form-control selectpicker">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>
                                            <b>Relish</b>
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Select with search</label>
                                    <select class="form-control select2" id="kt_select2_1" name="param">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nested select</label>
                                    <select class="form-control select2" id="kt_select2_2" name="param">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV" selected="selected">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Multi select</label>
                                    <select class="form-control select2" id="kt_select2_3" name="param" multiple="multiple">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK" selected="selected">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV" selected="selected">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT" selected="selected">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <h3 class="card-title">Tags Input</h3>
                    </div>
                    <div class="card-body pb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Basic</label>
                                    <input id="kt_tagify_1" class="form-control tagify" name='tags' placeholder='type...' value='css, html, javascript' autofocus="" data-blacklist='.NET,PHP' />
                                    <div class="mt-3">
                                        <a href="javascript:;" id="kt_tagify_1_remove" class="btn btn-sm btn-light-primary font-weight-bold">Remove tags</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Readonly</label>
                                    <input id="kt_tagify_1_1" class="form-control tagify" name='tags' readonly="readonly" placeholder='type...' value='css, html, javascript' autofocus="" data-blacklist='.NET,PHP' />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Outside of the box</label>
                                    <input id="kt_tagify_3" name='tags-outside' class='form-control tagify tagify--outside' value='css, html, javascript' placeholder='Write some tags' />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <h3 class="card-title">Touchspin</h3>
                    </div>
                    <div class="card-body pb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Basic</label>
                                    <input id="kt_touchspin_1" type="text" class="form-control" value="55" name="demo0" placeholder="Select time" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>With Prefix</label>
                                    <input id="kt_touchspin_2" type="text" class="form-control" value="0" name="demo0" placeholder="Select time" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>With Postfix</label>
                                    <input id="kt_touchspin_3" type="text" class="form-control" value="0" name="demo0" placeholder="Select time" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Vertical Icons</label>
                                    <input id="kt_touchspin_4" type="text" class="form-control bootstrap-touchspin-vertical-btn" value="" name="demo0" placeholder="40" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Vertical Custom Icons</label>
                                    <input id="kt_touchspin_5" type="text" class="form-control bootstrap-touchspin-vertical-btn" value="" name="demo0" placeholder="30" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <h3 class="card-title">Form Repeater</h3>
                    </div>
                    <div class="card-body pb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="kt_repeater_1">
                                    <div class="form-group">
                                        <div data-repeater-list="">
                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                <div class="col-md-3">
                                                    <label>Name:</label>
                                                    <input type="email" class="form-control" placeholder="Enter full name" />
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Number:</label>
                                                    <input type="email" class="form-control" placeholder="Enter contact number" />
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="radio-inline">
                                                        <label class="checkbox checkbox-success">
                                                            <input type="checkbox" />Primary
                                                            <span></span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="javascript:;" data-repeater-delete="" class="btn btn-icon btn-danger"><i class="la la-trash-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <h3 class="card-title">Range Slider</h3>
                    </div>
                    <div class="card-body pb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Basic </label>
                                    <input type="hidden" id="kt_slider_1" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Min & Max Values</label>
                                    <input type="hidden" id="kt_slider_2" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Custom Prefix</label>
                                    <input type="hidden" id="kt_slider_3" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Using Text</label>
                                    <input type="hidden" id="kt_slider_7" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <h3 class="card-title">Date/Time/ Picker</h3>
                    </div>
                    <div class="card-body pb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Date Picker</label>
                                    <input type="text" class="form-control" readonly="readonly" value="05/20/2017" id="kt_datepicker_3" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Date Time Picker</label>
                                    <input type="text" class="form-control" id="kt_datetimepicker_1" readonly="readonly" placeholder="Select date &amp; time" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Time Picker</label>
                                    <input class="form-control" id="kt_timepicker_1" readonly="readonly" placeholder="Select time" type="text" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Date Range Picker</label>
                                    <input class="form-control" id="kt_daterangepicker_1" readonly="readonly" placeholder="Select time" type="text" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <h3 class="card-title">Checkboxe</h3>
                    </div>
                    <div class="card-body pb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Default Checkboxes</label>
                                    <div class="checkbox-list">
                                        <label class="checkbox">
                                            <input type="checkbox" /> Default
                                            <span></span>
                                        </label>
                                        <label class="checkbox checkbox-disabled">
                                            <input type="checkbox" disabled="disabled" checked="checked" /> Disabled
                                            <span></span>
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked="checked" /> Checked
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Inline Checkboxes</label>
                                    <div class="checkbox-inline">
                                        <label class="checkbox">
                                            <input type="checkbox" /> Option 1
                                            <span></span>
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" /> Option 2
                                            <span></span>
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" /> Option 3
                                            <span></span>
                                        </label>
                                    </div>
                                    <span class="form-text text-muted">Some help text goes here</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Color options:</label>
                                    <div class="checkbox-inline flex-wrap">
                                        <label class="checkbox checkbox-primary">
                                            <input type="checkbox" checked="checked" /> Primary
                                            <span></span>
                                        </label>
                                        <label class="checkbox checkbox-success">
                                            <input type="checkbox" checked="checked" /> Success
                                            <span></span>
                                        </label>
                                        <label class="checkbox checkbox-danger">
                                            <input type="checkbox" checked="checked" /> Danger
                                            <span></span>
                                        </label>
                                        <label class="checkbox checkbox-warning">
                                            <input type="checkbox" checked="checked" /> Warning
                                            <span></span>
                                        </label>
                                        <label class="checkbox checkbox-info">
                                            <input type="checkbox" checked="checked" /> Info
                                            <span></span>
                                        </label>
                                        <label class="checkbox checkbox-dark">
                                            <input type="checkbox" checked="checked" /> Dark
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Square Style:</label>
                                    <div class="checkbox-inline flex-wrap">
                                        <label class="checkbox checkbox-square checkbox-success">
                                            <input type="checkbox" /> Option 1
                                            <span></span>
                                        </label>
                                        <label class="checkbox checkbox-square checkbox-success">
                                            <input type="checkbox" checked="checked" /> Option 2
                                            <span></span>
                                        </label>
                                        <label class="checkbox checkbox-square checkbox-primary">
                                            <input type="checkbox" checked="checked" /> Option 3
                                            <span></span>
                                        </label>
                                        <label class="checkbox checkbox-square checkbox-warning checkbox-disabled">
                                            <input type="checkbox" disabled> Disabled
                                            <span></span>
                                        </label>
                                        <label class="checkbox checkbox-square checkbox-danger checkbox-disabled">
                                            <input type="checkbox" disabled="disabled" checked="checked" /> Disabled & checked
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <h3 class="card-title">Radio</h3>
                    </div>
                    <div class="card-body pb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Default radios</label>
                                    <div class="radio-list">
                                        <label class="radio">
                                            <input type="radio" /> Default
                                            <span></span>
                                        </label>
                                        <label class="radio radio-disabled">
                                            <input type="radio" disabled="disabled" checked="checked" /> Disabled
                                            <span></span>
                                        </label>
                                        <label class="radio">
                                            <input type="radio" checked="checked" /> Checked
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Inline radios</label>
                                    <div class="radio-inline">
                                        <label class="radio">
                                            <input type="radio" /> Option 1
                                            <span></span>
                                        </label>
                                        <label class="radio">
                                            <input type="radio" /> Option 2
                                            <span></span>
                                        </label>
                                        <label class="radio">
                                            <input type="radio" /> Option 3
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Color options:</label>
                                    <div class="radio-inline flex-wrap">
                                        <label class="radio radio-primary">
                                            <input type="radio" checked="checked" /> Primary
                                            <span></span>
                                        </label>
                                        <label class="radio radio-success">
                                            <input type="radio" checked="checked" /> Success
                                            <span></span>
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" checked="checked" /> Danger
                                            <span></span>
                                        </label>
                                        <label class="radio radio-warning">
                                            <input type="radio" checked="checked" /> Warning
                                            <span></span>
                                        </label>
                                        <label class="radio radio-info">
                                            <input type="radio" checked="checked" /> Info
                                            <span></span>
                                        </label>
                                        <label class="radio radio-dark">
                                            <input type="radio" checked="checked" /> Dark
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Square Style:</label>
                                    <div class="radio-inline flex-wrap">
                                        <label class="radio radio-square radio-success">
                                            <input type="radio" /> Option 1
                                            <span></span>
                                        </label>
                                        <label class="radio radio-square radio-success">
                                            <input type="radio" checked="checked" /> Option 2
                                            <span></span>
                                        </label>
                                        <label class="radio radio-square radio-brand">
                                            <input type="radio" checked="checked" /> Option 3
                                            <span></span>
                                        </label>
                                        <label class="radio radio-square radio-warning radio-disabled">
                                            <input type="radio" disabled="disabled" /> Disabled
                                            <span></span>
                                        </label>
                                        <label class="radio radio-square radio-danger radio-disabled">
                                            <input type="radio" disabled="disabled" checked="checked" /> Disabled & checked
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <h3 class="card-title">Switch</h3>
                    </div>
                    <div class="card-body pb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Default Switch</label>
                                    <div class="col-3">
                                        <span class="switch">
                                            <label>
                                                <input type="checkbox" checked="checked" name="select" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <label class="col-3 col-form-label">With Icon</label>
                                    <div class="col-3">
                                        <span class="switch switch-icon">
                                            <label>
                                                <input type="checkbox" checked="checked" name="select" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <label class="col-3 col-form-label">Outline Switch</label>
                                    <div class="col-3">
                                        <span class="switch switch-outline switch-icon switch-primary">
                                            <label>
                                                <input type="checkbox" checked="checked" name="select" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <label class="col-3 col-form-label">Disabled State</label>
                                    <div class="col-3">
                                        <span class="switch">
                                            <label>
                                                <input type="checkbox" disabled="disabled" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <label class="col-3 col-form-label">Small Switch</label>
                                    <div class="col-3">
                                        <span class="switch switch-sm">
                                            <label>
                                                <input type="checkbox" checked="checked" name="select" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <label class="col-3 col-form-label">Large Switch</label>
                                    <div class="col-3">
                                        <span class="switch switch-lg">
                                            <label>
                                                <input type="checkbox" checked="checked" name="select" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Success</label>
                                    <div class="col-3">
                                        <span class="switch switch-success">
                                            <label>
                                                <input type="checkbox" checked="checked" name="select" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <label class="col-3 col-form-label">Primary</label>
                                    <div class="col-3">
                                        <span class="switch switch-primary">
                                            <label>
                                                <input type="checkbox" checked="checked" name="select" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Info</label>
                                    <div class="col-3">
                                        <span class="switch switch-info">
                                            <label>
                                                <input type="checkbox" checked="checked" name="select" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <label class="col-3 col-form-label">Danger</label>
                                    <div class="col-3">
                                        <span class="switch switch-danger">
                                            <label>
                                                <input type="checkbox" checked="checked" name="select" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Brand</label>
                                    <div class="col-3">
                                        <span class="switch switch-brand">
                                            <label>
                                                <input type="checkbox" checked="checked" name="select" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <label class="col-3 col-form-label">Dark</label>
                                    <div class="col-3">
                                        <span class="switch switch-dark">
                                            <label>
                                                <input type="checkbox" checked="checked" name="select" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <h3 class="card-title">Buttons</h3>
                    </div>
                    <div class="card-body pb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                    <button type="button" class="btn btn-success">Success</button>
                                    <button type="button" class="btn btn-danger">Danger</button>
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button type="button" class="btn btn-light">Light</button>
                                    <button type="button" class="btn btn-dark">Dark</button>
                                    <button type="button" class="btn btn-link">Link</button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary btn-sm">Small button</button>
                                    <button type="button" class="btn btn-primary">Default button</button>
                                    <button type="button" class="btn btn-primary btn-lg">Large button</button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                                    <button type="button" class="btn btn-success btn-lg btn-block">Block level button</button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary">Left</button>
                                        <button type="button" class="btn btn-primary">Middle</button>
                                        <button type="button" class="btn btn-primary">Right</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-success active">
                                            <input type="radio" name="options" id="option1" checked="checked" /> Active
                                        </label>
                                        <label class="btn btn-success">
                                            <input type="radio" name="options" id="option2" /> Radio
                                        </label>
                                        <label class="btn btn-success">
                                            <input type="radio" name="options" id="option3" /> Radio
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="#" class="btn btn-success btn-sm mr-3">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Call.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 Z M11.613922,13.2130341 C11.1688026,13.6581534 10.4887934,13.7685037 9.92575695,13.4869855 C9.36272054,13.2054673 8.68271128,13.3158176 8.23759191,13.760937 L6.72658218,15.2719467 C6.67169475,15.3268342 6.63034033,15.393747 6.60579393,15.4673862 C6.51847004,15.7293579 6.66005003,16.0125179 6.92202169,16.0998418 L8.27584113,16.5511149 C9.57592638,16.9844767 11.009274,16.6461092 11.9783003,15.6770829 L15.9775173,11.6778659 C16.867756,10.7876271 17.0884566,9.42760861 16.5254202,8.3015358 L15.8928491,7.03639343 C15.8688153,6.98832598 15.8371895,6.9444475 15.7991889,6.90644684 C15.6039267,6.71118469 15.2873442,6.71118469 15.0920821,6.90644684 L13.4995401,8.49898884 C13.0544207,8.94410821 12.9440704,9.62411747 13.2255886,10.1871539 C13.5071068,10.7501903 13.3967565,11.4301996 12.9516371,11.8753189 L11.613922,13.2130341 Z" fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>Success</a>
                                    <a href="#" class="btn btn-primary mr-3">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3" />
                                                    <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>Primary</a>
                                    <a href="#" class="btn btn-danger btn-lg">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <circle fill="#000000" cx="9" cy="15" r="6" />
                                                    <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>Danger</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="#" class="btn btn-icon btn-success btn-sm mr-2">
                                        <i class="flaticon2-pie-chart"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-primary mr-2">
                                        <i class="flaticon2-box-1"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-danger btn-lg mr-4">
                                        <i class="flaticon2-sms"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-outline-success btn-sm mr-2">
                                        <i class="flaticon2-poll-symbol"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-outline-primary mr-2">
                                        <i class="flaticon-file"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-outline-warning btn-lg mr-4">
                                        <i class="flaticon-browser"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary spinner-btn d-inline-flex align-items-center">Click me</button>
                                    <button type="button" class="btn btn-primary spinner-btn d-inline-flex align-items-center">Click me</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <h3 class="card-title">Dropdown</h3>
                    </div>
                    <div class="card-body pb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropdown button
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup</button>
                                        <div class="dropdown-menu" style="">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-primary">Split dropup</button>
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="btn-group dropright">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup</button>
                                        <div class="dropdown-menu" style="">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropright">
                                        <button type="button" class="btn btn-primary">Split dropup</button>
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="btn-group dropleft">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup</button>
                                        <div class="dropdown-menu" style="">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropleft">
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                        <button type="button" class="btn btn-primary">Split dropup</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="dropdown dropdown-inline mr-4">
                                        <button type="button" class="btn btn-light-primary btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-hor"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-light-primary btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-ver"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-sm">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <h3 class="card-title">Alerts</h3>
                    </div>
                    <div class="card-body pb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="alert alert-primary" role="alert">
                                        A simple primary alert—check it out!
                                    </div>
                                    <div class="alert alert-secondary" role="alert">
                                        A simple secondary alert—check it out!
                                    </div>
                                    <div class="alert alert-success" role="alert">
                                        A simple success alert—check it out!
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        A simple danger alert—check it out!
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        A simple warning alert—check it out!
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        A simple info alert—check it out!
                                    </div>
                                    <div class="alert alert-light" role="alert">
                                        A simple light alert—check it out!
                                    </div>
                                    <div class="alert alert-dark" role="alert">
                                        A simple dark alert—check it out!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="alert alert-custom alert-outline-primary fade show mb-5" role="alert">
                                        <div class="alert-icon">
                                            <i class="flaticon-warning"></i>
                                        </div>
                                        <div class="alert-text">A simple primary alert—check it out!</div>
                                        <div class="alert-close">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">
                                                    <i class="ki ki-close"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="alert alert-custom alert-outline-success fade show mb-5" role="alert">
                                        <div class="alert-icon">
                                            <i class="flaticon-warning"></i>
                                        </div>
                                        <div class="alert-text">A simple success alert—check it out!</div>
                                        <div class="alert-close">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">
                                                    <i class="ki ki-close"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="alert alert-custom alert-outline-danger fade show mb-5" role="alert">
                                        <div class="alert-icon">
                                            <i class="flaticon-warning"></i>
                                        </div>
                                        <div class="alert-text">A simple danger alert—check it out!</div>
                                        <div class="alert-close">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">
                                                    <i class="ki ki-close"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="alert alert-custom alert-outline-warning fade show mb-5" role="alert">
                                        <div class="alert-icon">
                                            <i class="flaticon-warning"></i>
                                        </div>
                                        <div class="alert-text">A simple warning alert—check it out!</div>
                                        <div class="alert-close">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">
                                                    <i class="ki ki-close"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="alert alert-custom alert-outline-dark fade show mb-5" role="alert">
                                        <div class="alert-icon">
                                            <i class="flaticon-warning"></i>
                                        </div>
                                        <div class="alert-text">A simple dark alert—check it out!</div>
                                        <div class="alert-close">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">
                                                    <i class="ki ki-close"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="alert alert-custom alert-outline-info fade show mb-5" role="alert">
                                        <div class="alert-icon">
                                            <i class="flaticon-warning"></i>
                                        </div>
                                        <div class="alert-text">A simple info alert—check it out!</div>
                                        <div class="alert-close">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">
                                                    <i class="ki ki-close"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <h3 class="card-title">Accordions</h3>
                    </div>
                    <div class="card-body pb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Basic</label>
                                    <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title" data-toggle="collapse" data-target="#collapseOne1">
                                                    Latest Orders
                                                </div>
                                            </div>
                                            <div id="collapseOne1" class="collapse show" data-parent="#accordionExample1">
                                                <div class="card-body pb-3">
                                                    ...
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo1">
                                                    Product Updates
                                                </div>
                                            </div>
                                            <div id="collapseTwo1" class="collapse" data-parent="#accordionExample1">
                                                <div class="card-body pb-3">
                                                    ...
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree1">
                                                    ...
                                                </div>
                                            </div>
                                            <div id="collapseThree1" class="collapse" data-parent="#accordionExample1">
                                                <div class="card-body pb-3">
                                                    ...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>With icon</label>
                                    <div class="accordion  accordion-toggle-arrow" id="accordionExample4">
                                        <div class="card">
                                            <div class="card-header" id="headingOne4">
                                                <div class="card-title" data-toggle="collapse" data-target="#collapseOne4">
                                                    <i class="flaticon2-layers-1"></i> User Permissions
                                                </div>
                                            </div>
                                            <div id="collapseOne4" class="collapse show" data-parent="#accordionExample4">
                                                <div class="card-body pb-3">
                                                    ...
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo4">
                                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo4">
                                                    <i class="flaticon2-copy"></i> Account Settings
                                                </div>
                                            </div>
                                            <div id="collapseTwo4" class="collapse" data-parent="#accordionExample4">
                                                <div class="card-body pb-3">
                                                    ...
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree4">
                                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree4">
                                                    <i class="flaticon2-bell-alarm-symbol"></i> Application Options
                                                </div>
                                            </div>
                                            <div id="collapseThree4" class="collapse" data-parent="#accordionExample4">
                                                <div class="card-body pb-3">
                                                    ...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
@endsection
