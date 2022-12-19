<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{url('content')}}">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->
      <ul class="sidebar-nav" id="sidebar-nav">

<li class="nav-item">
  <a class="nav-link " href="{{url('admin')}}">
    <i class="bi bi-grid"></i>
    <span>Admin</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link " href="{{url('customer')}}">
    <i class="bi bi-grid"></i>
    <span>Customer</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link " href="{{route('seller')}}">
    <i class="bi bi-grid"></i>
    <span>Seller</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link " href="{{url('Product')}}">
    <i class="bi bi-grid"></i>
    <span>Product</span>
  </a>
</li>


<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="{{url('category')}}">
          <i class="bi bi-journal-text"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('Men')}}">
              <i class="bi bi-circle"></i><span>Men</span>
            </a>
          </li>

          <li>
            <a href="{{url('Women')}}">
              <i class="bi bi-circle"></i><span>Women</span>
            </a>
          </li>

          <li>
            <a href="{{url('kids')}}">
              <i class="bi bi-circle"></i><span>Kids</span>
            </a>
          </li>

          <li>
            <a href="{{url('food')}}">
              <i class="bi bi-circle"></i><span>Food</span>
            </a>
          </li>

          <li>
            <a href="{{url('drink')}}">
              <i class="bi bi-circle"></i><span>Drink</span>
            </a>
          </li>


        </ul>
</li>

     <!-- End Components Nav -->

    
     <li class="nav-item">
  <a class="nav-link " href="{{route('page.cart')}}">
    <i class="bi bi-grid"></i>
    <span>Cart</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link " href="{{route('page.details')}}">
    <i class="bi bi-grid"></i>
    <span>Order details</span>
  </a>
</li>
      
<li class="nav-item">
  <a class="nav-link " href="{{route('page.order')}}">
    <i class="bi bi-grid"></i>
    <span>Order</span>
  </a>
</li>
      
<li class="nav-item">
  <a class="nav-link " href="{{route('page.payment')}}">
    <i class="bi bi-grid"></i>
    <span>Payment</span>
  </a>
</li>
      
<li class="nav-item">
  <a class="nav-link " href="{{route('page.supplier')}}">
    <i class="bi bi-grid"></i>
    <span>supplier</span>
  </a>
</li>
      

    </ul>

  </aside><!-- End Sidebar-->