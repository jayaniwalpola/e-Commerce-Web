@extends('master')
@section("content")
<div class="custom-product">

    <div class="col-sm-10">
        <table class="table">

            <tbody>
              <tr>
                <td>Amount</td>
                <td>${{$total}}</td>

              </tr>
              <tr>
                <td>Tax</td>
                <td>$0</td>

              </tr>
              <tr>
                <td>Delivery</td>
                <td>$10</td>

              </tr>
              <tr>
                <td>Total Amounth</td>
                <td>${{$total+10}}</td>

              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your addresss" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label><br><br>
                  <input type="radio" value="Online payment" name="payment"><span>Online payment</span><br><br>
                  <input type="radio" value="Credit Card payment" name="payment"><span>Credit Card payment</span><br><br>
                  <input type="radio" value="Payment on delivery" name="payment"><span>Payment on delivery</span><br><br>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>
          </div>
    </div>
</div>
@endsection
