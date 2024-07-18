@extends('layout.app')
@section('content')
@push('title')
<title>User Table</title>
@endpush
<!-- Exportable Table -->
<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="breadcrumb breadcrumb-style">
                    <li class="breadcrumb-item">
                        <h4 class="page-title">Tables</h4>
                    </li>
                    <li class="breadcrumb-item bcrumb-1">
                        <a href="{{ route('datatable')}}">
                            <i class="fas fa-home"></i> User Table
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>Exportable</strong> Table</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="tableExport"
                        class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Contact No</th>
                                <th>Relation</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Elon Musk</td>
                                <td>jay@gmail.com</td>
                                <td>7558166838</td>
                                <td>Father</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@7845</td>
                                <td>Kamla Heris</td>
                                <td>jay@gmail.com</td>
                                <td>9558177838</td>
                                <td>Friend</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>king@4567</td>
                                <td>Virat Kohli</td>
                                <td>kohli@gmail.com</td>
                                <td>7578457845</td>
                                <td>Captain</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>jay@2475</td>
                                <td>MS Dhoni</td>
                                <td>dhoni657@gmail.com</td>
                                <td>9558155578</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>abc@1234</td>
                                <td>Jaykant Vastav</td>
                                <td>jay@gmail.com</td>
                                <td>9558166838</td>
                                <td>Brother</td>
                                <td><i class="fas fa-eye"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
