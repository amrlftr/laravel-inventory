@extends('layout')

@section('content')
<div class="bx--data-table-container " data-table>
  <div class="bx--data-table-header">
    <h4 class="bx--data-table-header__title">Inventory</h4>
    <p class="bx--data-table-header__description"></p>
  </div>
  <table class="bx--data-table">
    <thead>
      <tr>
        <th><span class="bx--table-header-label"></span></th>
        <th><span class="bx--table-header-label">Item</span></th>
        <th><span class="bx--table-header-label">Stock(s)</span></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($inventories as $inventory)
        <tr class="bx--parent-row" data-parent-row  >
          <td class="bx--table-expand" data-event="expand">
            <button class="bx--table-expand__button">
              <svg focusable="false" preserveAspectRatio="xMidYMid meet" style="will-change: transform;" xmlns="http://www.w3.org/2000/svg" class="bx--table-expand__svg" width="16" height="16" viewBox="0 0 16 16" aria-hidden="true"><path d="M11 8l-5 5-.7-.7L9.6 8 5.3 3.7 6 3z"></path></svg>
            </button>
          </td>
          <td>{{ $inventory->item }}</td>
          <td>{{ $inventory->stock }}</td>
        </tr>
        <tr class="bx--expandable-row bx--expandable-row--hidden" data-child-row>
          <td colspan="3">
            <div class="bx--child-row-inner-container">
              <p>{{ $inventory->stock }}</p>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
