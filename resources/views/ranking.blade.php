<div class="col-lg-6" style='height: 600px;'>
    <!-- Latest Sales Widget -->
    <div id="leaderboard-container" class="block">
        <div class="block-header">
            <ul class="block-options">
            </ul>
            <h3 class="block-title"><i class="fa fa-rocket fa-2x"></i> TOP RIGS</h3>
        </div>

        <div class="block-content">
            <div class="pull-t pull-r-l">
                <!-- Block Tabs Justified Alternative Style -->
                <div class="block">
                    <div class="block-content tab-content" style="padding-top: 0;">
                        <div class="tab-pane active" id="btabs-alt-static-justified-weekly">
                            <table class="table table-borderless remove-margin-b remove-margin-t font-s13">
                                <thead>
                                <tr>
                                    <th class="text-center" style="width: 50%; text-align: left;">Name</th>
                                    <th class="hidden-xs" style="width: 50%; text-align: left;">Speed</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($leaderboard_top_hashspeed as $user)
                                    <tr>
                                        <td class="font-w600" style="width: 100%">
                                            <span class='text-primary'>#{{ $loop->iteration }} {{ $user->user()->name }}</span>
                                        </td>
                                        <td class="font-w600">
                                            <span class='text-primary'>{{ $user->hash_speed }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END Block Tabs Justified Default Style -->
            </div>
        </div>
    </div>
    <!-- END Latest Sales Widget -->
</div>

<div class="col-lg-6" style='height: 600px;'>
    <!-- Latest Sales Widget -->
    <div id="leaderboard-container" class="block">
        <div class="block-header">
            <ul class="block-options">
            </ul>
            <h3 class="block-title"><i class="fa fa-trophy fa-2x"></i> TOP CONTRIBUTORS</h3>
        </div>

        <div class="block-content">
            <div class="pull-t pull-r-l">
                <!-- Block Tabs Justified Alternative Style -->
                <div class="block">
                    <div class="block-content tab-content" style="padding-top: 0;">
                        <div class="tab-pane active" id="btabs-alt-static-justified-weekly">
                            <table class="table table-borderless remove-margin-b remove-margin-t font-s13">
                                <thead>
                                <tr>
                                    <th class="text-center" style="width: 50%; text-align: left;">Name</th>
                                    <th class="hidden-xs" style="width: 50%; text-align: left;">Lifetime Hash</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($leaderboard_top_hashpower as $user)
                                    <tr>
                                        <td class="font-w600" style="width: 100%">
                                            <span class='text-primary'>#{{ $loop->iteration }} {{ $user->user()->name }}</span>
                                        </td>
                                        <td class="font-w600">
                                            <span class='text-primary'>{{ $user->hash_12 }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END Block Tabs Justified Default Style -->
            </div>
        </div>
    </div>
    <!-- END Latest Sales Widget -->
</div>