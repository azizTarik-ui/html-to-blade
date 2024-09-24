    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="p-t-30">
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                            aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                class="hide-menu">Dashboard</span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="#"
                            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Blog Management
                            </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{ route('view-blog') }}" class="sidebar-link"><i
                                        class="mdi mdi-note-outline"></i><span class="hide-menu"> View Blog
                                    </span></a></li>

                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="#"
                            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Product
                                Management
                            </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{ route('category.index') }}" class="sidebar-link"><i
                                        class="mdi mdi-note-outline"></i><span class="hide-menu">Category List
                                    </span></a>
                            </li>
                            <li class="sidebar-item"><a href="{{ route('sub_category_list') }}" class="sidebar-link"><i
                                        class="mdi mdi-note-outline"></i><span class="hide-menu">Sub-Category List
                                    </span></a>
                            </li>
                            <li class="sidebar-item"><a href="{{ route('product_list') }}" class="sidebar-link"><i
                                        class="mdi mdi-note-outline"></i><span class="hide-menu">Product List
                                    </span></a>
                            </li>
                            <li class="sidebar-item"><a href="{{ route('product_report') }}" class="sidebar-link"><i
                                        class="mdi mdi-note-outline"></i><span class="hide-menu">Product Report
                                    </span></a>
                            </li>
                            <li class="sidebar-item"><a href="{{ route('role.index') }}" class="sidebar-link"><i
                                        class="mdi mdi-note-outline"></i><span class="hide-menu">Roles
                                    </span></a>
                            </li>

                        </ul>
                    </li>

                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="#"
                            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">People
                            </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{ route('customer.index') }}" class="sidebar-link"><i
                                        class="mdi mdi-note-outline"></i><span class="hide-menu"> Customer List
                                    </span></a></li>
                            <li class="sidebar-item"><a href="{{ route('supplier.index') }}" class="sidebar-link"><i
                                        class="mdi mdi-note-outline"></i><span class="hide-menu"> Supplier List
                                    </span></a></li>
                        </ul>

                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="#"
                            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Purchase
                            </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{ route('purchase.index') }}" class="sidebar-link"><i
                                        class="mdi mdi-note-outline"></i><span class="hide-menu"> Purchase List
                                    </span></a></li>
                        </ul>

                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="#"
                            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Sale
                            </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{ route('sale.index') }}" class="sidebar-link"><i
                                        class="mdi mdi-note-outline"></i><span class="hide-menu"> Sale List
                                    </span></a></li>
                        </ul>

                    </li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
