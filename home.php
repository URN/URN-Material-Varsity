<?php get_header(); ?>

<div class="main-content home-content">
    <div class="row varsity-scores">
        <h1>Varsity Scores</h1>

        <div class="scores">
            <div class="score">
                <span class="team">UoN</span>
                <span class="points uon-points">-</span>
            </div>

            <div class="score">
                <span class="team">NTU</span>
                <span class="points ntu-points">-</span>
            </div>
        </div>
    </div>

    <div class="row varsity-matches">
        <table>
            <thead>
                <tr>
                    <th>Game</th>
                    <th>Date</th>
                    <th>UoN Score</th>
                    <th>NTU Score</th>
                    <th>Winner</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

    </div>

    <div class="row row-wide">
        <p class="live-link" style="font-size: 2em;">
            <?php
                switch (date ('d-m-y')) {
                    case '25-03-17':
                        echo 'Check out our live coverage of the Varsity Rugby League <a href="' . get_template_directory_uri() . '/var2017_rugby">here</a>' ;
                        break;

                    case '26-03-17':
                        echo 'Check out our live coverage of the Varsity Volleyball <a href="' . get_template_directory_uri() . '/var2017_volleyball">here</a>' ;
                        break;

                    case '27-03-17':
                        echo 'Check out our live coverage of the Varsity Futsal <a href="' . get_template_directory_uri() . '/var2017_futsal">here</a>' ;
                        break;

                    case '28-03-17':
                        echo 'Check out our live coverage of the Varsity Lacrosse <a href="' . get_template_directory_uri() . '/var2017_lacrosse">here</a>' ;
                        break;

                    case '29-03-17':
                        echo 'Check out our live coverage of the Varsity Super Wednesday <a href="' . get_template_directory_uri() . '/var2017_wed29">here</a>' ;
                        break;

                    case '30-03-17':
                        echo 'Check out our live coverage of the Varsity Ice Hockey <a href="' . get_template_directory_uri() . '/var2017_ice">here</a>' ;
                        break;

                    case '07-05-17':
                        echo 'Check out our live coverage of the Varsity Netball <a href="' . get_template_directory_uri() . '/var2017_netball">here</a></br> and our coverage of the Varisty Water Polo <a href="' . get_template_directory_uri() . '/var2017_water_polo">here</a>' ;
                        break;

                    case '08-05-17':
                        echo 'Check out our live coverage of the Varsity Hockey <a href="' . get_template_directory_uri() . '/var2017_hockey">here</a>' ;
                        break;

                    case '09-05-17':
                        echo 'Check out our live coverage of the Varsity Basketball <a href="' . get_template_directory_uri() . '/var2017_basketball">here</a>' ;
                        break;

                    case '10-05-17':
                        echo 'Check out our live coverage of the Varsity Super Wednesday <a href="' . get_template_directory_uri() . '/var2017_wed10">here</a>' ;
                        break;

                    case '11-05-17':
                        echo 'Check out our live coverage of the Varsity Football <a href="' . get_template_directory_uri() . '/var2017_football">here</a>' ;
                        break;

                    case '12-05-17':
                        echo 'Check out our live coverage of the Varsity Cricket <a href="' . get_template_directory_uri() . '/var2017_cricket">here</a>' ;
                        break;

                    case '13-05-17':
                        echo 'Check out our live coverage of the Varsity American Football <a href="' . get_template_directory_uri() . '/var2017_american_football">here</a>' ;
                        break;

                    case '14-05-17':
                        echo 'Check out our live coverage of the Varsity Rugby Union <a href="' . get_template_directory_uri() . '/var2017_rugby_union">here</a>' ;
                        break;

                    default:
                        echo '';
                    break;
                }
            ?>
        </p>
    </div>

    <div class="row row-wide">
        <div class="row vertical su-box">
            <h1>Varsity Audio</h1>

            <div class="audioboom-feed" data-channel-id="4227797" data-channel-audioboom-type="users" data-channel-type="urn-speech" data-channel-name="URN Speech" data-card-type="0" data-show-image="false"></div>

            <a target="_blank" href="https://audioboom.com/users/4227797/boos">
                <button class="btn">See more</button>
            </a>

        </div>
    </div>

    <div class="row row-wide">
        <div class="twitter">
            <a width="360" class="twitter-timeline" data-dnt="true" href="https://twitter.com/urn1350/lists/urn-tweets" data-widget-id="644596981076226048">Tweets from https://twitter.com/urn1350/lists/urn-tweets</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
        <div class="row row-wide vertical">
            <h1>Today's Schedule</h1>
            <div class="schedule mini-schedule">
                <ul class="day-names">
                    <li class="day-name">
                        Today
                    </li>
                </ul>
                <a class="btn full-schedule-link" href="<?php echo get_permalink( get_page_by_path( 'schedule' ) )?>">
                    Full Schedule
                </a>
                <div class="timetable">
                    <ul class="times">
                        <li>Midnight</li>
                        <li>1am</li>
                        <li>2am</li>
                        <li>3am</li>
                        <li>4am</li>
                        <li>5am</li>
                        <li>6am</li>
                        <li>7am</li>
                        <li>8am</li>
                        <li>9am</li>
                        <li>10am</li>
                        <li>11am</li>
                        <li>Noon</li>
                        <li>1pm</li>
                        <li>2pm</li>
                        <li>3pm</li>
                        <li>4pm</li>
                        <li>5pm</li>
                        <li>6pm</li>
                        <li>7pm</li>
                        <li>8pm</li>
                        <li>9pm</li>
                        <li>10pm</li>
                        <li>11pm</li>
                    </ul>
                    <ul class="days">
                        <li class="day">
                            <h1 class="inline-day-name">Today</h1>
                            <ul class="slots"></ul>
                        </li>
                    </ul>
                </div>
            </div>

            <h1>Headlines</h1>
            <div class="audioboom-feed" data-card-type="0" data-channel-id="4227841" data-channel-audioboom-type="users" data-channel-type="urn-headlines" data-channel-name="URN Headlines"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
