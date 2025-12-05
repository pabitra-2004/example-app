<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;


class QueryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        // dd('Hello World');
        // $results = DB::table('products')->where('quantityInStock', '>', 9000)->select('productName', 'quantityInStock')->get();

        // ? fetch customer above credit limit 9000
        // $results = DB::table('customers')->where('creditLimit', '>', 9000)->get();

        // ? customer name starts with a, print name, number, city
        // $results = DB::table('customers')->where('customerName', 'like', 'a%')->select('customerNumber', 'customerName', 'city')->get();

        // ?  40-50 quantity order, print productcode, name
        // $results = DB::table('products')
        //     ->select('products.productCode', 'products.productName', 'orderdetails.quantityOrdered')
        //     ->join('orderdetails', 'products.productCode', 'orderdetails.productCode')
        //     ->whereBetween('orderdetails.quantityOrdered', [40, 50])
        //     ->get();

        // ? office wise count employee print officecode, name, count employee
        // $results = DB::table('offices')
        // ->selectRaw('offices.*, COUNT(employees.employeeNumber) as employee_count')
        // ->leftJoin('employees', 'offices.officeCode', 'employees.officeCode')
        // ->groupBy('offices.officeCode')
        // ->get();

        // ? customers with orders above 6000 [print customers details(name, number), total orders amount]
        // $results = DB::table('customers')
        //     ->selectRaw('customers.customerNumber, customers.customerName, SUM(payments.amount) AS total_amount')
        //     ->join('payments', 'customers.customerNumber', 'payments.customerNumber')
        //     ->groupBy('customers.customerNumber')
        //     ->having('total_amount', '>', 60000)
        //     ->orderBy('total_amount', 'desc')
        //     ->get();


        //! single customer per year total order



        // ? Print the employee's name, email, and office details.
        // $results = DB::table('employees')
        // ->selectRaw('concat(employees.firstName, "", employees.lastName) AS full_name, employees.email, offices.*')
        // ->join('offices', 'employees.officeCode', 'offices.officeCode')
        // ->get();

        // ? Fetch the count of employees by job title from the employees table
        // $results = DB::table('employees')
        // ->selectRaw('jobTitle, count(employeeNumber) as employee_count')
        // ->groupBy('jobTitle')
        // ->get();

        // ? Fetch customers along with their total orders shipped.
        // $results = DB::table('customers')
        //     ->selectRaw('customers.customerNumber, customers.customerName, customers.phone, customers.city, count(orders.orderNumber) as total_orders_shipped')
        //     ->leftJoin('orders', 'customers.customerNumber', 'orders.customerNumber')
        //     ->where('orders.status', '=', 'shipped')
        //     ->groupBy('customers.customerNumber')
        //     ->orderBy('total_orders_shipped', 'desc')
        //     ->get();

        // ? List customers who have ordered between 5,000 and 7,000
        // $results = DB::table('customers')
        //     ->selectRaw('customers.*, COUNT(payments.checkNumber) AS purchase_count, sum(payments.amount) as total_amount')
        //     ->join('payments', 'customers.customerNumber', 'payments.customerNumber')
        //     ->groupBy('customers.customerNumber')
        //     ->havingBetween(DB::raw('SUM(payments.amount)'), [5000, 7000])
        //     // ->havingBetween('total_amount', [5000, 7000])
        //     ->orderByDesc('total_amount') // 3->50000, 5->20000, 2->100000
        //     ->orderByDesc('purchase_count')
        //     ->get();


        // ? Fetch products along with their order frequencies.
        // $results = DB::table('products')
        //     ->selectRaw('products.productCode, products.productName, sum    (orderdetails.orderNumber) as Order_Count')
        //     ->join('orderdetails', 'products.productCode', 'orderdetails.productCode')
        //     ->groupBy('products.productCode')
        //     ->get();

        // ? Print products according to their MPR in descending order.
        // $results = DB::table('products')
        //     ->orderBy('MRP', 'desc')
        //     ->get();

        // ? List customers whose names start with 'a' & 'b' is present anywhere.
        // $results = DB::table('customers')
        //     ->whereLike('customerName', '%a%b%')
        //     ->orWhereLike('customerName', '%b%a%')
        //     ->get();

        // ! Print the names of customers who have a credit limit above 75000 and contain the letters 'a', 'b', or 'c' in their names.
        // $results = DB::table('customers')
        //     ->select('customerName')
        //     ->where([
        //         ['creditLimit', '>', 75000],
        //         ['customerName', 'like', '%a%'],
        //         ['customerName', 'like', '%b%'],
        //         ['customerName', 'like', '%c%'],
        //     ])
        //     ->orderBy('customerName')
        //     ->get();

        // ? Print the full addresses (addressLine1 + addressLine2 + city + state + country + postalCode) and contact details (contactFirstName + contactLastName, phone) of customers who have `so` in their names.
        // $results = DB::table('customers')
        //     ->whereLike('customerName', '%so%')
        //     ->orderBy('contactFirstName')
        //     ->selectRaw('
        //         CONCAT_WS(", ", addressLine1, addressLine2, city, state, country, postalCode) AS Full_Address,
        //         CONCAT(contactFirstName, " ", contactLastName, ", ", phone) as Contact_Details
        //     ')
        //     ->get();

        // ? List products sorted by their order frequency in descending order.
        // $results = DB::table('products')
        //     ->selectRaw('products.*')
        //     ->leftJoin('orderdetails', 'orderdetails.productCode', 'products.productCode')
        //     ->groupBy('products.productCode')
        //     ->orderByDesc(DB::raw('COUNT(orderdetails.quantityOrdered)'))
        //     ->get();

        // ? Fetch the vendors along with the counts of products they supply.
        // $results = DB::table('products')
        //     ->selectRaw('productVendor, COUNT(`productCode`) AS total_products_supply')
        //     ->groupBy('productVendor')
        //     ->orderBy('total_products_supply')
        //     ->get();

        // ? Print the dates along with the total payments received, listed in descending order.
        // $results = DB::table('payments')
        //     ->selectRaw('paymentDate, SUM(amount) AS total_payments_received')
        //     ->groupBy('paymentDate')
        //     ->orderByDesc('total_payments_received')
        //     ->get();

        // ? 6. Print the total number of orders shipped for each date.
        // $results = DB::table('orders')
        //     ->selectRaw('shippedDate, COUNT(status) AS total_orders_shipped')
        //     ->where('status', 'Shipped')
        //     ->groupBy('shippedDate')
        //     ->orderByDesc('total_orders_shipped')
        //     ->get();

        // ? Fetch the five products with the highest order quantities.
        // $results = DB::table('products')
        //     ->selectRaw('products.productCode, products.productName, SUM(orderdetails.quantityOrdered) AS total_quantityOrdered')
        //     ->leftJoin('orderdetails', 'orderdetails.productCode', 'products.productCode')
        //     ->groupBy('productCode')
        //     ->orderByDesc('total_quantityOrdered')
        //     ->limit(5)
        //     ->get();

        // ! Identify which employees report to whom and their respective job titles.
        // $results = DB::table('employees as e_employees')
        //     ->selectRaw('e_employees.employeeNumber, e_employees.firstName, e_employees.jobTitle, m_employees.firstName AS reports_to, m_employees.jobTitle AS reports_to_job_title')
        //     ->join('employees AS m_employees', 'e_employees.reportsTo', 'm_employees.employeeNumber')
        //     ->get();


        // ? Print the count of products by product line.
        // $results = DB::table('products')
        //     ->selectRaw('productLine, COUNT(productLine) AS Count_Product')
        //     ->groupBy('productLine')
        //     ->get();


        // ? Fetch the count of shipped orders by product line.
        $results = DB::table('products')
            ->selectRaw('productLine, COUNT(orderdetails.orderNumber) AS total_order_shipped_by')
            ->join('orderdetails', 'orderdetails.productCode', 'products.productCode')
            ->join('orders', 'orders.orderNumber', 'orderdetails.orderNumber')
            ->where('orders.status', 'Shipped')
            ->groupBy('productLine')
            ->orderByDesc('total_order_shipped_by')
            ->get();

        // dd(DB::getQueryLog());
        // dd($results->dumpRawSql());
        // dd($results->dumpRawSql());
        // $results->ddRawSql(); // print raw sql
        // $results->dd();
        return response()->json(['count' => count($results), 'results' => $results], options: JSON_PRETTY_PRINT);
    }
}
