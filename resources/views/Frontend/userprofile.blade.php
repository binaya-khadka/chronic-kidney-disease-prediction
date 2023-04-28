@extends('Frontend.Layouts.app')

@section('title', 'My Profile')

@section('css')

<style>
  .section-title {
    font-family: 'Poppins', sans-serif;
  }
  .section-container {
    font-family: 'Gentium Book Plus', serif;
    padding: 2.125rem 1.1254rem;
  }

  .profile_report_title {
    font-size: 1.5rem; 
    font-weight: 500;
  }

  .lastAnalysisReportContainer {
    border: 1px solid #000; 
    border-radius: 6px; 
    padding: 1.725rem 1.1255rem;
  }

  .smallHeaderTitle {
    font-size: 1.2rem;
  }

</style>

@endsection

@section('content')

<div class="container">
  <div class="section-title">
    <h1>My Profile</h1>
    <hr>
  </div>
  <div class="section-container">
    <p class="mini-title"><b>Name:</b> 
      {{ ucFirst(auth()->user()->name) }}
    </p>
    <?php
    // if((auth()->user()->analysis()->count()) == 0) {
    //   echo "hi";
    // } else {
    //   echo "bye";
    // }
    ?>
    <p class="mini-title" style="margin-bottom: 1.75rem"><b>Total Analysis Performed:</b>
      @if((auth()->user()->analysis()->count()) == 0)
        <?php 
        echo '<span style="font-weight: 500;">';
        ?>
        {{"No Analysis has done"}}
        <?php
        echo '</span>';
        ?>
      @endif
      {{auth()->user()->analysis->count()}}
    </p>
    
    @if((auth()->user()->analysis()->count()) > 0) 
      <div class="lastAnalysisReportContainer">
        <p style="margin-bottom: 0;"><b class="profile_report_title">Last Analysis Report</b></p>
        <div class="divider"></div>
        <h3 class="smallHeaderTitle">
          Result: 
          <?php
          $class = auth()->user()->analysis->last()->class;
          $text = ($class === 0) ? 'CKD' : 'NOT CKD';
          $color = ($class === 0) ? 'tomato' : 'green';
          echo "<span style='color: $color; font-weight: 600;'>$text</span>";
          ?>
          </span>
        </h3>
        <h3 class="smallHeaderTitle">
          Date: 
          <span style="color: rgb(0, 0, 0); font-weight: 600;">
            {{ (auth()->user()->analysis->last()->created_at->format('Y-m-d')) }}
          </span>
        </h3>
      </div>
    @endif
  </div>
</div>

@endsection


