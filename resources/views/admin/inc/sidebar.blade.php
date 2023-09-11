<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" key="t-menu">Menu</li>

        <li>
            <a href="{{ route('contacts.index') }}" class="waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboards">Contacts</span>
            </a>

        </li>

        <li class="menu-title" key="t-menu">Web Contents</li>


        {{-- hero --}}
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-hero">Hero</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('heros.index') }}" key="t-list">All Hero</a></li>
                <li><a href="{{ route('heros.create') }}" key="t-create">Create Hero</a></li>

            </ul>
        </li>
        {{-- End - hero --}}

        {{-- faq --}}
        {{-- <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-faq">Faq</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('faqs.index') }}" key="t-list">All Faq</a></li>
        <li><a href="{{ route('faqs.create') }}" key="t-create">Create Faq</a></li>

    </ul>
    </li> --}}
    {{-- End - faq --}}

    {{-- team --}}
    {{-- <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-team">Team</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('teams.index') }}" key="t-list">All Team</a></li>
    <li><a href="{{ route('teams.create') }}" key="t-create">Create Team</a></li>

    </ul>
    </li> --}}
    {{-- End - hero --}}

    {{-- testimonial --}}
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="bx bx-home-circle"></i>
            <span key="t-testimonial">Testimonial</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('testimonials.index') }}" key="t-list">All Testimonial</a></li>
            <li><a href="{{ route('testimonials.create') }}" key="t-create">Create Testimonial</a></li>

        </ul>
    </li>
    {{-- End - hero --}}

    {{-- service --}}
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="bx bx-home-circle"></i>
            <span key="t-service">Service</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('services.index') }}" key="t-list">All Service</a></li>
            <li><a href="{{ route('services.create') }}" key="t-create">Create Service</a></li>

        </ul>
    </li>
    {{-- End - service --}}
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="bx bx-home-circle"></i>
            <span key="t-certification">Certification</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('certifications.index') }}" key="t-list">All Certification</a></li>
            <li><a href="{{ route('certifications.create') }}" key="t-create">Create Certification</a></li>

        </ul>
    </li>



    {{-- category --}}
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="bx bx-home-circle"></i>
            <span key="t-category">Category</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('categories.index') }}" key="t-list">All Category</a></li>
            <li><a href="{{ route('categories.create') }}" key="t-create">Create Category</a></li>

        </ul>
    </li>
    {{-- End - category --}}

    {{-- product --}}
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="bx bx-home-circle"></i>
            <span key="t-product">product</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('products.index') }}" key="t-list">All product</a></li>
            <li><a href="{{ route('products.create') }}" key="t-create">Create product</a></li>

        </ul>
    </li>
    {{-- End - product --}}



    {{-- start - blog --}}
    {{-- <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="bx bx-home-circle"></i>
            <span key="t-blog">Blog</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('blogs.index') }}" key="t-list">All Blog</a></li>
    <li><a href="{{ route('blogs.create') }}" key="t-create">Create Blog</a></li>

    </ul>
    </li> --}}
    {{-- End - blog --}}

    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="bx bx-home-circle"></i>
            <span key="t-hero">Website Content</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('about.edit', 1) }}" key="t-list">About Us</a></li>
            <li><a href="{{ route('contact.edit', 1) }}" key="t-list">Contact Info</a></li>
            <li><a href="{{ route('general.edit', 1) }}" key="t-list">General Setting</a></li>

        </ul>

    </li>
    {{-- End - hero --}}
    </ul>
</div>