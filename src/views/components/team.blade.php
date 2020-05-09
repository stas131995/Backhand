<div class="team-section" id="team">
    <div class="container text-center">
        <h2 class="section-title">Our Team</h2>
        <p class="intro">See who are behind AppKit</p>
        <div class="story">
            <p>AppKit is created by Xiaoying Riley and Tomasz Najdek. Xiaoying and Tom got to know each other while working as freelancers on Google projects and became good friends. They firmly believe with the right resource, solopreneurs and small teams can execute beautiful products too. Thus they made AppKit to help developers and startups make outstanding products - the internet has made it possible for the "small guys" to compete directly with the "big guys".</p>
        </div>
        <div class="members-wrapper row">
            @foreach ($team as $member)
            <div class="item col-md-6 col-sm-6 col-xs-12">
                <div class="item-inner">
                    <div class="profile">
                        <img class="profile-image" src="{{ $member->getImage() }}" alt="{{ $member->getFullName() }}" />
                    </div>
                    <div class="member-content">
                        <h3 class="member-name">{{ $member->getFullName() }}</h3>
                        <div class="member-title">{{ $member->getTitle() }}</div>
                        <ul class="social list-inline">
                            @foreach ($member->getSocials() as $social)
                            <li>
                                <a class="{{ $social->getSlug() }}" href="{{ $social->getLink() }}" target="_blank">
                                    <i class="fa fa-{{ $social->getSlug() }}"></i>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="member-desc">
                           <p>
                               {{ $member->getInfo() }}
                           </p>
                        </div><!--//member-desc-->
                    </div><!--//member-content-->
                </div><!--//item-inner-->
            </div><!--//item-->
            @endforeach
        </div><!--//members-wrapper-->
    </div>
</div><!--//team-section-->
