<!DOCTYPE html>
<html lang="en">
  <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
  <head>
    <title>Affinity Homes Management Console</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="./dist/css/adminx.css"
      media="screen"
    />

    <link href="./dist/css/fancygrid.min.css" rel="stylesheet">

  </head>
  <body>
    <div class="adminx-container">
      <nav class="navbar navbar-expand justify-content-between fixed-top">
        <a class="navbar-brand mb-0 h1 d-none d-md-block" href="index.html">
          <img
            src="./demo/img/logo.png"
            class="navbar-brand-image d-inline-block align-top mr-2"
            alt=""
          />
          Affinity Homes
        </a>

        <form class="form-inline form-quicksearch d-none d-md-block mx-auto">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-icon">
                <i data-feather="search"></i>
              </div>
            </div>
            <input
              type="text"
              class="form-control"
              id="search"
              placeholder="Type to search..."
            />
          </div>
        </form>

        <div class="d-flex flex-1 d-block d-md-none">
          <a href="#" class="sidebar-toggle ml-3">
            <i data-feather="menu"></i>
          </a>
        </div>

        <ul class="navbar-nav d-flex justify-content-end mr-2">
          <!-- Notificatoins -->
          <li class="nav-item dropdown d-flex align-items-center mr-2">
            <a
              class="nav-link nav-link-notifications"
              id="dropdownNotifications"
              data-toggle="dropdown"
              href="#"
            >
              <i class="oi oi-bell display-inline-block align-middle"></i>
              <span class="nav-link-notification-number">3</span>
            </a>
            <div
              class="dropdown-menu dropdown-menu-right dropdown-menu-notifications"
              aria-labelledby="dropdownNotifications"
            >
              <div
                class="notifications-header d-flex justify-content-between align-items-center"
              >
                <span class="notifications-header-title"> Notifications </span>
                <a href="#" class="d-flex"><small>Mark all as read</small></a>
              </div>

              <div class="list-group">
                <a
                  href="#"
                  class="list-group-item list-group-item-action unread"
                >
                  <p class="mb-1">
                    Invitation for <strong>Lunch</strong> on
                    <strong>Jan 12th 2018</strong> by <strong>Laura</strong>
                  </p>

                  <div class="mb-1">
                    <button type="button" class="btn btn-primary btn-sm">
                      Accept invite
                    </button>
                    <button type="button" class="btn btn-outline-danger btn-sm">
                      Decline
                    </button>
                  </div>

                  <small>1 hour ago</small>
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                  <p class="mb-1">
                    <strong class="text-success">Goal completed</strong
                    ><br />1,000 new members today
                  </p>
                  <small>3 days ago</small>
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                  <p class="mb-1 text-danger">
                    <strong>System error detected</strong>
                  </p>
                  <small>3 days ago</small>
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                  <p class="mb-1">
                    Your task <strong>Design Draft</strong> is due today.
                  </p>
                  <small>4 days ago</small>
                </a>
              </div>

              <div class="notifications-footer text-center">
                <a href="#"><small>View all notifications</small></a>
              </div>
            </div>
          </li>
          <!-- Notifications -->
          <li class="nav-item dropdown">
            <a
              class="nav-link avatar-with-name"
              id="navbarDropdownMenuLink"
              data-toggle="dropdown"
              href="#"
            >
              <img
                src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg"
                class="d-inline-block align-top"
                alt=""
              />
            </a>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="navbarDropdownMenuLink"
            >
              <a class="dropdown-item" href="#">My Profile</a>
              <a class="dropdown-item" href="#">My Tasks</a>
              <a class="dropdown-item" href="#">Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="#">Sign out</a>
            </div>
          </li>
        </ul>
      </nav>

      <!-- expand-hover push -->
      <!-- Sidebar -->
      <div class="adminx-sidebar expand-hover push">
        <ul class="sidebar-nav">
          <li class="sidebar-nav-item">
            <a href="index.html" class="sidebar-nav-link active">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
              <span class="sidebar-nav-name"> Dashboard </span>
              <span class="sidebar-nav-end"> </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a href="#" class="sidebar-nav-link">
              <span class="sidebar-nav-icon">
                <i data-feather="layout"></i>
              </span>
              <span class="sidebar-nav-name"> Layout Options </span>
              <span class="sidebar-nav-end">
                <span class="badge badge-info">4</span>
              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a
              class="sidebar-nav-link collapsed"
              data-toggle="collapse"
              href="#example"
              aria-expanded="false"
              aria-controls="example"
            >
              <span class="sidebar-nav-icon">
                <i data-feather="pie-chart"></i>
              </span>
              <span class="sidebar-nav-name"> Charts </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="example">
              <li class="sidebar-nav-item">
                <a
                  href="./layouts/charts_chartjs.html"
                  class="sidebar-nav-link"
                >
                  <span class="sidebar-nav-abbr"> Ch </span>
                  <span class="sidebar-nav-name"> ChartJS </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr"> Mo </span>
                  <span class="sidebar-nav-name"> Morris </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a
              class="sidebar-nav-link collapsed"
              data-toggle="collapse"
              href="#navTables"
              aria-expanded="false"
              aria-controls="navTables"
            >
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name"> Tables </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navTables">
              <li class="sidebar-nav-item">
                <a href="./layouts/tables.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr"> Re </span>
                  <span class="sidebar-nav-name"> Regular Tables </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/tables_data.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr"> Da </span>
                  <span class="sidebar-nav-name"> Data Tables </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a
              class="sidebar-nav-link collapsed"
              data-toggle="collapse"
              href="#navForms"
              aria-expanded="false"
              aria-controls="navForms"
            >
              <span class="sidebar-nav-icon">
                <i data-feather="edit"></i>
              </span>
              <span class="sidebar-nav-name"> Forms </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navForms">
              <li class="sidebar-nav-item">
                <a href="./layouts/form_elements.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr"> El </span>
                  <span class="sidebar-nav-name"> Elements </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/form_advanced.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr"> Ad </span>
                  <span class="sidebar-nav-name"> Advanced Elements </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a
              class="sidebar-nav-link collapsed"
              data-toggle="collapse"
              href="#navUI"
              aria-expanded="false"
              aria-controls="navUI"
            >
              <span class="sidebar-nav-icon">
                <i data-feather="grid"></i>
              </span>
              <span class="sidebar-nav-name"> UI Elements </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navUI">
              <li class="sidebar-nav-item">
                <a href="./layouts/icons.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr"> Ic </span>
                  <span class="sidebar-nav-name"> Icons </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/buttons.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr"> Bu </span>
                  <span class="sidebar-nav-name"> Buttons </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/notifications.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr"> No </span>
                  <span class="sidebar-nav-name"> Notifications </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/progress.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr"> Pr </span>
                  <span class="sidebar-nav-name"> Progress Bars </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/tabs.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr"> Ta </span>
                  <span class="sidebar-nav-name"> Tabs </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a
              class="sidebar-nav-link collapsed"
              data-toggle="collapse"
              href="#navExtra"
              aria-expanded="false"
              aria-controls="navExtra"
            >
              <span class="sidebar-nav-icon">
                <i data-feather="layers"></i>
              </span>
              <span class="sidebar-nav-name"> Other Layouts </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navExtra">
              <li class="sidebar-nav-item">
                <a href="./layouts/login.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr"> Lo </span>
                  <span class="sidebar-nav-name"> Login </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/signup.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr"> Si </span>
                  <span class="sidebar-nav-name"> Sign Up </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/404.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr"> Nf </span>
                  <span class="sidebar-nav-name"> 404 Error </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/500.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr"> Is </span>
                  <span class="sidebar-nav-name"> 500 Error </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/timeline.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr"> Ti </span>
                  <span class="sidebar-nav-name"> Timeline </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/invoice.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr"> In </span>
                  <span class="sidebar-nav-name"> Invoice </span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Sidebar End -->

      <!-- adminx-content-aside -->
      <div class="adminx-content">
        <!-- <div class="adminx-aside">

        </div> -->

        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Dashboard
                </li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Dashboard</h1>
            </div>

            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card mb-grid w-100">
                  <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between mb-3">
                      <h5 class="card-title mb-0">Outstanding Invoices</h5>

                      <div class="card-title-sub">$753.82</div>
                    </div>

                    <div class="progress mt-auto">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 75%"
                        aria-valuenow="75"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      >
                        3/4
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card mb-grid w-100">
                  <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between mb-3">
                      <h5 class="card-title mb-0">Open Tasks</h5>

                      <div class="card-title-sub">18/30</div>
                    </div>

                    <div class="progress mt-auto">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 60%"
                        aria-valuenow="75"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex">
                <div
                  class="card border-0 bg-primary text-white text-center mb-grid w-100"
                >
                  <div class="d-flex flex-row align-items-center h-100">
                    <div
                      class="card-icon d-flex align-items-center h-100 justify-content-center"
                    >
                      <i data-feather="shopping-cart"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Sales</div>
                      <h3 class="card-title mb-0">768</h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex">
                <div
                  class="card border-0 bg-success text-white text-center mb-grid w-100"
                >
                  <div class="d-flex flex-row align-items-center h-100">
                    <div
                      class="card-icon d-flex align-items-center h-100 justify-content-center"
                    >
                      <i data-feather="users"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Sign Ups (this week)</div>
                      <h3 class="card-title mb-0">1,258</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-8">
                <div id="myForm" class="card"></div>
                <!-- <div id="datatable" class="card"></div> -->
                <!-- <input type="file" class="my-pond" name="filepond"/> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script> 
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>

    <script src="./dist/js/vendor.js"></script>
    <script src="./dist/js/adminx.js"></script>
    <script src="./dist/js/fancygrid.min.js"></script>
    <script type="text/javascript">
      //Fancy.MODULESDIR = '/fancygrid/modules/';
      (async function fetchProperties (){
        $.get('../api/properties.php', (data) => {
          $('#datatable').FancyGrid({
            width: 'fit',
            height: 'fit',
            data: data,
            columns: [
              {
                type: "order",
                locked: true,
              },
              {
                index: 'title',
                title: 'Title',
                type: 'string',
                width: 300,
                editable: true,
              },
              {
                index: 'location',
                title: 'Location',
                type: 'string',
                width: 200,
                editable: true,
              },
              {
                index: 'size',
                title: 'Size',
                type: 'string',
                width: 80,
                editable: true,
                // render: (o) => {
                //   o.value = `${o.value} m²`;
                //   return o;
                // },
              },
              {
                type: "combo",
                index: 'type',
                title: 'Type',
                data: ["Sale", "Rent", "Sale & Rent"],
                width: 100,
                editable: true,
              },
              {
                type: 'number',
                index: 'sales_cost',
                title: 'Sales Cost',
                width: 100,
                editable: true,
                render: (o) => {
                  o.value = `Kes ${o.value.toLocaleString()}`;
                  return o;
                },
              },
              {
                index: 'rental_cost',
                title: 'Rental Cost',
                type: 'string',
                width: 100,
                editable: true,
                render: (o) => {
                  o.value = `Kes ${o.value.toLocaleString()}`;
                  return o;
                },
              },
              {
                index: 'ROI',
                title: 'ROI',
                type: 'string',
                width: 50,
                editable: true,
              },
              {
                type: 'switcher',
                index: 'visible',
                title: 'Visible',
                width: 60,
                editable: true,
              },
              {
                type: 'image',
                index: 'photo',
                title: 'Photo',
                width: 100
              },
            ]
          });
        })
      })()

      let data = [
        {name: 'Ted', surname: 'Smith', company: 'Electrical Systems', age: 30},
        {name: 'Ed', surname: 'Johnson', company: 'Energy and Oil', age: 35},
        {name: 'Sam', surname: 'Williams',  company: 'Airbus', age: 38},
        {name: 'Alexander', surname: 'Brown', company: 'Renault', age: 24},
        {name: 'Nicholas', surname: 'Miller', company: 'Adobe', age: 33},
        {name: 'Andrew', surname: 'Thompson', company: 'Google', age: 28},
        {name: 'Ryan', surname: 'Walker', company: 'Siemens', age: 39},
        {name: 'John', surname: 'Scott', company: 'Cargo', age: 45},
        {name: 'James', surname: 'Phillips', company: 'Pro bugs', age: 30},
        {name: 'Brian', surname: 'Edwards', company: 'IT Consultant', age: 23},
        {name: 'Jack', surname: 'Richardson', company: 'Europe IT', age: 24},
        {name: 'Alex', surname: 'Howard', company: 'Cisco', age: 27},
        {name: 'Carlos', surname: 'Wood', company: 'HP', age: 36},
        {name: 'Adrian', surname: 'Russell', company: 'Micro Systems', age: 31},
        {name: 'Jeremy', surname: 'Hamilton', company: 'Big Machines', age: 30},
        {name: 'Ivan', surname: 'Woods', company: '', age: 24},
        {name: 'Peter', surname: 'West', company: 'Adobe', age: 26},
        {name: 'Scott', surname: 'Simpson', company: 'IBM', age: 29},
        {name: 'Lorenzo', surname: 'Tucker', company: 'Intel', age: 29},
        {name: 'Randy', surname: 'Grant', company: 'Bridges', age: 30},
        {name: 'Arthur', surname: 'Gardner', company: 'Google', age: 31},
        {name: 'Orlando', surname:'Ruiz', company: 'Apple', age: 32}
      ];

      let form = new FancyForm({ 
        renderTo: 'myForm',
        height: 350,
        items: [
          {
            type: 'string',
            label: 'Title',
            name: 'title',
          },
          {
            type: 'string',
            label: 'Location',
            name: 'location',
          },
          {
            type: 'number',
            label: 'Size',
            name: 'size',
          },
          {
            type: 'number',
            label: 'Size',
            name: 'size',
          },
          {
            type: 'radio',
            label: 'Property Type',
            name: 'type',
            value: 'Sale',
            items: [
              { text: 'For Sale', value: 'Sale' },
              { text: 'For Rent', value: 'Rent' },
              { text: 'Both Rent & Sale', value: 'Rent & Sale' }
            ]
          },
          {
            type: 'number',
            label: 'Cost',
            name: 'cost',
          },
          {
            type: 'number',
            label: 'ROI',
            name: 'ROI',
          },
          {
            label: 'Label',
            type: 'button',
            name: 'button',
            buttonText: 'Button'
          },
          {
            type: 'html',
            value: ['<input type="file" class="my-pond" name="filepond"/>'].join("")
          }
        ]
      });

      setTimeout(() => {
        $.fn.filepond.registerPlugin(FilePondPluginImagePreview);
        // Turn input element into a pond
        $('.my-pond').filepond();
        // Set allowMultiple property to true
        $('.my-pond').filepond('allowMultiple', true);
        // Listen for addfile event
        $('.my-pond').on('FilePond:addfile', function(e) {
            console.log('file added event', e);
        });
        // Manually add a file using the addfile method
        $('.my-pond').first().filepond('addFile', 'index.html').then(function(file){
          console.log('file added', file);
        });
      }, 5000);

      $(function(){
        // First register any plugins
      });

      //var form = FancyForm.get('myForm');
      //form.setTitle('new Title');
      //form.show();

      // document.addEventListener("DOMContentLoaded", function() {
      //   new FancyGrid({
      //     renderTo: 'datatable',
      //     width: '100%',
      //     height: 400,
      //     data: data,
      //     columns: [{
      //       index: 'company',
      //       title: 'Company',
      //       type: 'string',
      //       width: 100
      //     },{
      //       index: 'name',
      //       title: 'Name',
      //       type: 'string',
      //       width: 100
      //     },{
      //       index: 'surname',
      //       title: 'Sur Name',
      //       type: 'string',
      //       width: 100
      //     },{
      //       index: 'age',
      //       title: 'Age',
      //       type: 'number',
      //       width: 100
      //     }]
      //   });
      // });
    </script>
  </body>
</html>
