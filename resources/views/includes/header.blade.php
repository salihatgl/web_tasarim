
<nav class="navbar navbar-expand-sm  justify-content-center  mb-5">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active  me-2 active "
                    style="color:#9dbbdf; font-size:large; border-top:2px solid #9dbbdf " href="#">{{ __('messages.Home') }}</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link me-2 " style="color:#9dbbdf; font-size:large;" href="#">{{ __('messages.The Villa') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-2 " style="color:#9dbbdf; font-size:large;" href="#">{{ __('messages.Contact Us') }}</a>
            </li>
            <li>
            <select id="dil" style="height: 25px; width:150px;" class="mt-2">
                <option >{{ __('messages.language option') }}</option>
                <option  value="1">Turkish</option>
                <option  value="2">English</option>
                <option  value="3">French</option>
                <option  value="4">Russian</option>
                <option  value="5">German</option>
                <option  value="6">Japanese</option>

            </select>
        </li>
        </ul>
    </nav>