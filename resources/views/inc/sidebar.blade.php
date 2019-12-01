<div class="col-12 toggle-button">
    <button class="btn btn-default bg-primary text-white mt-1 menu-btn">Menu</button>
</div>
<div class="col-md-2 sidebar-bg bg-dark text-center border-top sidebar-toggle">
    @if(Auth::guard('admin')->check())
    <div class="mt-2">
        <a href="/admin/home" class="text-white text-decoration-none">
            <div class="py-2 border-bottom">
                Dashboard
            </div>
        </a>
        <a href="/admin/students" class="text-white text-decoration-none">
            <div class="py-2 border-bottom">
                Students
            </div>
        </a>
        <a href="/admin/studentcomplaints" class="text-white text-decoration-none">
            <div class="py-2 border-bottom">
                New complaints
            </div>
        </a>
        <a href="/admin/complaints/reviewed" class="text-white text-decoration-none">
            <div class="py-2 border-bottom">
                Reviewed complaints
            </div>
        </a>
    </div>
    @else
    <div class="mt-2">
        <a href="/home" class="text-white text-decoration-none">
            <div class="py-2 border-bottom">
                Dashboard
            </div>
        </a>
        <a href="/complaints/create" class="text-white text-decoration-none">
            <div class="py-2 border-bottom">
                Create complaint
            </div>
        </a>
        <a href="/complaints" class="text-white text-decoration-none">
            <div class="py-2 border-bottom">
                View complaints
            </div>
        </a>
        <a href="/complaints/reviewed" class="text-white text-decoration-none">
            <div class="py-2 border-bottom">
                Reviewed complaints
            </div>
        </a>
    </div>
    @endif
</div>