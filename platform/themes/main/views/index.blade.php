@php Theme::layout('no-sidebar') @endphp
<div id="fullpage" class="fullpage" data-section="{{$section}}">
    @includeIf('theme.main::views.sections.section1')
    @includeIf('theme.main::views.sections.section2')
    @includeIf('theme.main::views.sections.section3')
    @includeIf('theme.main::views.sections.section4')
    @includeIf('theme.main::views.sections.section5')
    @includeIf('theme.main::views.sections.section6')
    @includeIf('theme.main::views.sections.section7')
    @includeIf('theme.main::views.sections.section8')
    @includeIf('theme.main::views.sections.section9')
    @includeIf('theme.main::views.sections.section10')
    @includeIf('theme.main::views.sections.section11')
    @includeIf('theme.main::views.sections.section12')
</div>
