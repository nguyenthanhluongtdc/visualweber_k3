@php Theme::layout('no-sidebar') @endphp

<div id="fullpage" class="fullpage">
    @includeIf('theme.main::views.sections.section1')
    @includeIf('theme.main::views.sections.section2')
    @includeIf('theme.main::views.sections.section3')
    @includeIf('theme.main::views.sections.section4')
    @includeIf('theme.main::views.sections.section5')
    @includeIf('theme.main::views.sections.section6')
    </div>
