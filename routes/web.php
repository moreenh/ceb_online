<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Administrator's simple GET routes
Route::get('/register-employee-account', function () {
    return view('user_administrator.register_employee_account.main');
});
Route::get('/employee-accounts', function () {
    return view('user_administrator.employee_accounts.main');
});

//Customer's simple GET routes
Route::get('/current-connections', function () {
    return view('user_customer.current_connections.main');
});
Route::get('/request-connection', function () {
    return view('user_customer.request_connection.main');
});

//Employee Type One's simple GET routes
Route::get('/add-customer-category', function () {
    return view('user_employee_type_one.add_customer_category.main');
});
Route::get('/connection-requests', function () {
    return view('user_employee_type_one.connection_requests.main');
});
Route::get('/overall-energy-consumption', function () {
    return view('user_employee_type_one.overall_energy_consumption.main');
});
Route::get('/update-unit-costs', function () {
    return view('user_employee_type_one.update_unit_costs.main');
});

//Employee Type Two's simple GET routes
Route::get('/customer-accounts', function () {
    return view('user_employee_type_two.customer_accounts.main');
});
Route::get('/register-customer-account', function () {
    return view('user_employee_type_two.register_customer_account.main');
});
Route::get('/enter-meter-reading', function () {
    return view('user_employee_type_two.enter_meter_reading.main');
});