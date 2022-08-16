@extends('master')
@section("content")
<div class="custom-product mx-3">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Amount</th>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <th scope="row">Tax</th>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <th scope="row">Delivery</th>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <th scope="row">Total Amount</th>
                    <td>$ {{$total+10}}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="mb-3">
                    <Textarea name="address" class="form-control" placeholder="Enter your address"></Textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Payment Method</label> <br><br>
                    <input type="radio" value="cash" name="payment" ><span>Online Payment</span><br><br>
                    <input type="radio" value="cash" name="payment" ><span>EMI Payment</span><br><br>
                    <input type="radio" value="cash" name="payment" ><span>Payment on Delivery</span><br><br>
                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
            </form>
        </div>

    </div>

</div>
@endsection