<section class="nav-wrapper">
   <nav class="project-nav">
      <div class="container">
         <div class="col-12">
            <a href="{{ route('project_preview', ['projectId' => $project->id, 'step' => 'synthesis']) }}"{!! Request::route()->parameters['step'] === 'synthesis' ? ' class="active"' : '' !!}>@lang('dashboard.project.synthesis')</a>
            <a href="{{ route('project_preview', ['projectId' => $project->id, 'step' => 'activities']) }}"{!! Request::route()->parameters['step'] === 'activities' ? ' class="active"' : '' !!}>@lang('dashboard.project.activities')</a>
            <a href="{{ route('project_preview', ['projectId' => $project->id, 'step' => 'structure']) }}"{!! Request::route()->parameters['step'] === 'structure' ? ' class="active"' : '' !!}>@lang('dashboard.project.structure')</a>
            <a href="{{ route('project_preview', ['projectId' => $project->id, 'step' => 'elements']) }}"{!! Request::route()->parameters['step'] === 'elements' ? ' class="active"' : '' !!}>@lang('dashboard.project.elements')</a>
            <a href="{{ route('project_preview', ['projectId' => $project->id, 'step' => 'business_plan']) }}"{!! Request::route()->parameters['step'] === 'business_plan' ? ' class="active"' : '' !!}>@lang('dashboard.project.business_plan')</a>

            @if( env('APP_ENV') !== 'production' )
               <a href="{{ route('project_preview', ['projectId' => $project->id, 'step' => 'annex']) }}"{!! Request::route()->parameters['step'] === 'annex' ? ' class="active"' : '' !!}>@lang('dashboard.project.annex')</a>
            @endif
         </div>
      </div>
   </nav>
</section>