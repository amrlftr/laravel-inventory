@extends('layout')

@section('content')
  <div class="row">
      <div class="col-md-12">
        <div class="bx--data-table-header">
            <h4 class="bx--data-table-header__title">Add New Item</h4>
            <p class="bx--data-table-header__description"></p>
          </div>
          <form action="{{ url('inventory') }}" method="post">
            <div class="bx--form-item">
                <label for="item_name" class="bx--label"><h3>Item Name</h3></label>
                <input id="item_name" name="item_name" type="text" class="bx--text-input">
            </div>
            <div class="bx--form-item">
                <label for="item_desc" class="bx--label">Description</label>
                <textarea id="item_desc" name="item_desc" class="bx--text-area" rows="4" cols="50"></textarea>
              </div>
            <div class="bx--form-item">
                <button class="bx--btn bx--btn--primary" name="save_item" type="submit">Submit</button>
            </div>
          </form>
      </div>
  </div>
@endsection