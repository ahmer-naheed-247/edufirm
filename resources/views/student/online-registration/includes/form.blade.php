<div class="tabbable">
    <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
        <li class="active" id="generalInfoTab">
            <a data-toggle="tab" href="#generalInfo"><i class="fa fa-user bigger-110"></i> General Information</a>
        </li>
        <li id="academicInfoTab">
            <a data-toggle="tab" href="#academicInfo"><i class="fa fa-certificate bigger-110"></i> Academic Info</a>
        </li>
        <li id="profileImageTab">
            <a data-toggle="tab" href="#profileImage"><i class="fa fa-image bigger-110"></i> Profile Images</a>
        </li>
        @if($data['registration_setting']->rules_status == '1' || $data['registration_setting']->agreement_status == '1')
        <li id="ruleAgreementTab">
            <a data-toggle="tab" href="#ruleAgreement"><i class="fa fa-certificate bigger-110"></i> Rule & Agreement</a>
        </li>
        @endif
    </ul>

    <div class="tab-content">
        <div id="generalInfo" class="tab-pane active">
            @include($view_path.'.includes.forms.generalinfo')
            @include('student.registration.includes.forms.parent')
            <hr>
            <div class="text-right">
                <a class=" btn btn-info" data-toggle="tab" href="#academicInfo" onclick="activeAcademicInfo()">
                    Next <i class="fa fa-arrow-circle-right bigger-110"></i>
                </a>
            </div>
        </div>

        <div id="academicInfo" class="tab-pane">
            @include('student.registration.includes.forms.academicinfo')
            <hr>
            <div class="text-right">
                <a class="btn btn-primary" data-toggle="tab" href="#generalInfo" onclick="activeGeneralInfo()">
                    <i class="fa fa-arrow-circle-left bigger-110"></i> Previous
                </a>
                <a class="btn btn-info" data-toggle="tab" href="#profileImage" onclick="activeProfileImage()">
                    Next <i class="fa fa-arrow-circle-right bigger-110"></i>
                </a>
            </div>
        </div>

        <div id="profileImage" class="tab-pane">
            @include('student.registration.includes.forms.profileimage')
            <hr>
            <div class="text-right">
                <a class="btn btn-primary" data-toggle="tab" href="#academicInfo" onclick="activeAcademicInfo()">
                    <i class="fa fa-arrow-circle-left bigger-110"></i> Previous
                </a>
                @if($data['registration_setting']->rules_status == '1' || $data['registration_setting']->agreement_status == '1')
                    <a class="btn btn-info" data-toggle="tab" href="#ruleAgreement" onclick="activeRuleAgreement()">
                        Next <i class="fa fa-arrow-circle-right bigger-110"></i>
                    </a>
                @endif
            </div>
        </div>
        @if($data['registration_setting']->rules_status == '1' || $data['registration_setting']->agreement_status == '1')
        <div id="ruleAgreement" class="tab-pane">
            @include($view_path.'.includes.forms.rule-agreement')
            <hr>
            <div class="text-right">
                <a class="btn btn-primary" data-toggle="tab" href="#profileImage" onclick="activeProfileImage()">
                    <i class="fa fa-arrow-circle-left bigger-110"></i> Previous
                </a>
            </div>
        </div>
        @endif
    </div>

    <div class="space-4"></div>

    <div class="hr hr-24"></div>
</div>