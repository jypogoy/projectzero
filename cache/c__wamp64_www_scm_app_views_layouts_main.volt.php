

<div class="ui fixed borderless huge menu">
    <div class="ui container grid">
        <div class="computer only row">
            <a class="header item"><img class="logo" src="img/falcon-icon.png" style="width: 32px; height: 32px; margin-right: 10px;">ProjectOne</a><a class="active item">Home</a><a class="item">About</a><a class="item">Contact</a><a class="ui dropdown item">Dropdown<i class="dropdown icon"></i>
            <div class="menu">
                <div class="item">
                Action
                </div>
                <div class="item">
                Another action
                </div>
                <div class="item">
                Something else here
                </div>
                <div class="ui divider"></div>
                <div class="header">
                Navbar header
                </div>
                <div class="item">
                Seperated link
                </div>
                <div class="item">
                One more seperated link
                </div>
            </div>
            </a>
            <div class="right menu">
            </div>
        </div>
        <div class="tablet mobile only row">
            <a class="header item"> Project Name</a>
            <div class="right menu">
            <a class="menu item">
                <div class="ui basic icon toggle button">
                <i class="content icon"></i>
                </div>
            </a>
            </div>
            <div class="ui vertical accordion borderless fluid menu">
            <a class="active item"> Home</a><a class="item"> About</a><a class="item"> Contact</a>
            <div class="item">
                <div class="title">
                Dropdown<i class="dropdown icon"></i>
                </div>
                <div class="content">
                <div class="item">
                    Action
                </div>
                <div class="item">
                    Another action
                </div>
                <div class="item">
                    Something else here
                </div>
                <div class="ui divider"></div>
                <div class="header item">
                    Navbar header
                </div>
                <div class="item">
                    Seperated link
                </div>
                <div class="item">
                    One more seperated link
                </div>
                </div>
            </div>
            <div class="ui divider"></div>
            </div>
        </div>
    </div>
</div>

<?= $this->getContent() ?>