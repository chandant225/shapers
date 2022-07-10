@extends('layouts.app') @section('content')
<div>
  @if (Session::has('message'))
  <div class="message-wrapper">
    <div class="success-message">
      <div>{{ Session::get('message') }}</div>
    </div>
  </div>
  @endif @if (Session::has('error'))
  <div>
    {{ Session::get('error') }}
  </div>
  @endif
  <section class="section become-a-shaper">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="section-title">
            Global Shapers Kathmandu Hub 2021
          </h1>

          <div class="shaper-conditions my-5">
            <div class="shaper-condition">
              <h5 class="mb-2">ELIGIBILITY:</h5>
              <hr />
              <p class="mb-2">
                You are eligible to apply to Kathmandu Shapers
                if:
              </p>
              <ul class="mb-3 list-disc">
                <li>
                  You are between 18-27 years old; align with
                  the missions of the larger Global Shapers
                  Community.
                </li>
                <li>
                  Residents of or live close to the hub city,
                  Kathmandu
                </li>
                <li>
                  Committed to working to improve our
                  community.
                </li>
                <li>
                  Interested in developing your leadership
                  potential.
                </li>
                <li>
                  Work well in teams and are collaborative in
                  spirit.
                </li>
                <li>
                  Selections are usually restricted to one
                  Shaper from a single organization and/or
                  family.
                </li>
              </ul>
            </div>

            <div class="shaper-condition">
              <h5 class="mb-2">ADDITIONAL REQUIREMENTS:</h5>
              <hr />
              <p class="mb-2">
                Should you be selected as Kathmandu Shapers,
                please note:
              </p>
              <ul class="mb-3 list-disc">
                <li>
                  All freshmen Shapers will go through a
                  probation period.
                </li>
                <li>
                  You significantly contribute to a project to
                  completion in their freshman year in order
                  to remain a Shaper in the year of your
                  intake.
                </li>
                <li>
                  You will be required to complete a new
                  member survey after their selection to
                  confirm their acceptance.
                </li>
                <li>
                  All Kathmandu Shapers are required to attend
                  an annual retreat every year.
                </li>
                <li>
                  Shapers are invited and highly encouraged to
                  join the SHAPE events and apply for WEF
                  events (selection based).
                </li>
                <li>
                  Review and accept our
                  <a href="">Hub Charter</a> and pledge right
                  after probation period is over
                </li>
                <li>
                  Submit annual membership fee before joining
                  & annually in every year.
                </li>
              </ul>
            </div>

<<<<<<< HEAD
                        </div>
                    </div>
                    <div class="col-sm-12 contact-us">
                        <div class="contact-head">
                            <div class="inner-content">
                                <div class="row align-items-center">
                                    <div class="col-sm-12">
                                        <div class="form-main">
                                            <h3 class="inner-title left">BE ONE OF US</h3>
                                            <small>Global Shapers Kathmandu Hub reserves the right to
                                                reject application at any point without an
                                                explanation.</small>
                                            <!-- <form class="form become-shaper mt-3" method="post" action="">
                                                                                  <div class="row">
                                                                                    <div class="col-lg-6 col-12">
                                                                                      <div class="form-group">
                                                                                        <label>Full Name<sup>*</sup></label>
                                                                                        <input name="name" type="text"
                                                                                          placeholder="Full Name" required="required" />
                                                                                      </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-12">
                                                                                      <div class="form-group">
                                                                                        <label>Date of Birth<sup>*</sup></label>
                                                                                        <input name="dob" type="date"
                                                                                          placeholder="Date of Birth" required="required" />
                                                                                      </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-12">
                                                                                      <div class="form-group">
                                                                                        <label>Email<sup>*</sup></label>
                                                                                        <input name="email" type="email"
                                                                                          placeholder="Your Email" required="required" />
                                                                                      </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-12">
                                                                                      <div class="form-group">
                                                                                        <label>Phone Number<sup>*</sup></label>
                                                                                        <input name="phone" type="text"
                                                                                          placeholder="Your Phone" required="required" />
                                                                                      </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-12">
                                                                                      <div class="form-group">
                                                                                        <label>Link to your social media
                                                                                          profile<sup>*</sup></label>
                                                                                        <input name="social_url" type="url"
                                                                                          placeholder="Your Socials" required="required" />
                                                                                      </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-12">
                                                                                      <div class="form-group">
                                                                                        <label>If you are currently employed, please state
                                                                                          the name of your org<sup>*</sup></label>
                                                                                        <input name="curr_company" type="text"
                                                                                          placeholder="Your current employer"
                                                                                          required="required" />
                                                                                      </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12 col-12">
                                                                                      <div class="form-group">
                                                                                        <label>What is your subject area of expertise? (Eg:
                                                                                          Media, Education, Health, Finance, Business
                                                                                          etc.)<sup>*</sup></label>
                                                                                        <input name="expertise" type="text"
                                                                                          placeholder="Your current employer"
                                                                                          required="required" />
                                                                                      </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12 col-12">
                                                                                      <div class="form-group">
                                                                                        <label>List out your three best skills (seperated by
                                                                                          , )<sup>*</sup></label>
                                                                                        <input name="curr_company" type="text"
                                                                                          placeholder="Your current employer"
                                                                                          required="required" />
                                                                                      </div>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                      <div class="form-group message">
                                                                                        <label for="">Have you been involved in other
                                                                                          group/communities? Have you led or have been a
                                                                                          part of any initiative through the group? Share
                                                                                          your experience (150 words or
                                                                                          less)<sup>*</sup></label>
                                                                                        <textarea name="experience" placeholder="Your Experience" maxlength="650"></textarea>
                                                                                      </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12 col-12">
                                                                                      <div class="form-group">
                                                                                        <label>How did you get to know about Global Shapers
                                                                                          Kathmandu Hub? (Mention the name of the person, if
                                                                                          any)<sup>*</sup></label>
                                                                                        <input name="know_from" type="text"
                                                                                          placeholder="Reference" required="required"
                                                                                          list="options" />
                                                                                        <datalist id="options">
                                                                                          <option value="Social Media">
                                                                                          <option value="Kathmandu Hub Website">
                                                                                          <option value="Friend">
                                                                                          <option value="GSKH Event">
                                                                                          <option value="GSKH Member">
                                                                                          <option value="GSKH Alumni">
                                                                                          <option value="Other">
                                                                                      </div>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                      <div class="form-group message">
                                                                                        <label for="">Why do you want to join our community?
                                                                                          (100 words or less)<sup>*</sup></label>
                                                                                        <textarea name="experience" placeholder="Your Cause" maxlength="350"></textarea>
                                                                                      </div>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                      <div class="form-group message">
                                                                                        <label for="">Global Shapers are supposed to run
                                                                                          social impact projects in their respective cities.
                                                                                          If you had had the chance to lead a project what
                                                                                          would it be and why?<sup>*</sup></label>
                                                                                        <textarea name="experience" placeholder="Your Thoughts" rows="8"></textarea>
                                                                                      </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-12">
                                                                                      <div class="form-group">
                                                                                        <label>If selected, how many hours per week will you
                                                                                          be able to commit to hub
                                                                                          activities?<sup>*</sup></label>
                                                                                        <select class="form-select">
                                                                                          <option value="1-5">1-5</option>
                                                                                          <option value="6-100">6-10</option>
                                                                                          <option value="11-15">11-15</option>
                                                                                          <option value="15plus">15+</option>
                                                                                        </select>
                                                                                      </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-12">
                                                                                      <div class="form-group">
                                                                                        <label>Please upload your updated CV
                                                                                          here<sup>*</sup><br />&nbsp;</label>
                                                                                        <input type="file" name="cv" required="required"
                                                                                          class="form-control" />
                                                                                      </div>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                      <div class="form-group button">
                                                                                        <button type="submit" class="btn">
                                                                                          Submit Form
                                                                                        </button>
                                                                                      </div>
                                                                                    </div>
                                                                                  </div>
                                                                                </form> -->
                                            <form class="form become-shaper" method="post"
                                                action="{{ route('joinus.store') }} " enctype="multipart/form-data">
                                                @csrf
                                                @method('POST')
                                                <div class="row">
                                                    <div class="col-lg-6 col-12">
                                                        <input type="text" name="fullname" class="question"
                                                            id="name" required autocomplete="off" />
                                                        <label for="name"><span>Full
                                                                Name<sup>*</sup></span></label>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <input type="date" name="date_of_birth" class="question"
                                                            id="dob" required autocomplete="off" />
                                                        <label for="dob"><span>Date of
                                                                Birth<sup>*</sup></span></label>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <input type="email" name="email" class="question"
                                                            id="email" required autocomplete="off" />
                                                        <label for="email"><span>Email<sup>*</sup></span></label>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <input type="text" name="phone" class="question"
                                                            id="phone" required autocomplete="off" />
                                                        <label for="phone"><span>Phone
                                                                Number<sup>*</sup></span></label>
                                                    </div>
                                                    <div class="col-lg-12 col-12 mb-4rem mb-lg-0">
                                                        <input type="text" name="social_media" class="question"
                                                            id="social_url" required autocomplete="off" />
                                                        <label for="social_url"><span>Link to your social
                                                                media
                                                                profile<sup>*</sup></span></label>
                                                    </div>
                                                    <div class="col-lg-12 col-12">
                                                        <input type="text" name="name_of_organization"
                                                            class="question full-width-m" id="curr_company" required
                                                            autocomplete="off" />
                                                        <label for="curr_company"><span>If you are currently
                                                                employed, please state
                                                                the name of your org<sup>*</sup></span></label>
                                                    </div>
                                                    <div class="col-lg-12 col-12">
                                                        <input type="text" name="expertise"
                                                            class="question full-width-m" id="expertise" required
                                                            autocomplete="off" />
                                                        <label for="expertise"><span>What is your subject area
                                                                of expertise? (Eg:
                                                                Media, Education, Health, Finance, Business
                                                                etc.)<sup>*</sup></span></label>
                                                    </div>
                                                    <div class="col-lg-12 col-12">
                                                        <input type="text" name="best_skills"
                                                            class="question full-width-m" id="skills" required
                                                            autocomplete="off" />
                                                        <label for="skills"><span>List out your three best
                                                                skills (seperated by
                                                                , )<sup>*</sup></span></label>
                                                    </div>
                                                    <div class="col-lg-12 col-12">
                                                        <input type="text" name="get_to_know_about"
                                                            class="question full-width-m" id="know_from" required
                                                            autocomplete="off" list="options" />
                                                        <label for="know_from"><span>How did you get to know
                                                                about Global Shapers
                                                                Kathmandu Hub? (Mention the name of the person, if
                                                                any)<sup>*</sup></span></label>
                                                        <datalist id="options">
                                                            <option value="Social Media">
                                                            <option value="Kathmandu Hub Website">
                                                            <option value="Friend">
                                                            <option value="GSKH Event">
                                                            <option value="GSKH Member">
                                                            <option value="GSKH Alumni">
                                                            <option value="Other">
                                                        </datalist>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for=""><span>Have you been involved in other
                                                                    group/communities? Have you led or have been a
                                                                    part of any initiative through the group? Share
                                                                    your experience (150 words or
                                                                    less)<sup>*</sup></span></label>
                                                            <textarea name="involved_in_other_group" placeholder="Your Experience" maxlength="650" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group message">
                                                            <label for="">Why do you want to join our community?
                                                                (100 words or less)<sup>*</sup></label>
                                                            <textarea name="join_our_community" placeholder="Your Cause" maxlength="350" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group message">
                                                            <label for="">Global Shapers are supposed to run
                                                                social impact projects in their respective cities.
                                                                If you had had the chance to lead a project what
                                                                would it be and why?<sup>*</sup></label>
                                                            <textarea name="chance_to_lead_a_project" placeholder="Your Thoughts" rows="8" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group">
                                                            <label>If selected, how many hours per week will you
                                                                be able to commit to hub
                                                                activities?<sup>*</sup></label>
                                                            <select name="hours_per_week" class="form-select"
                                                                style="height: 55px;">
                                                                <option value="1-5">1-5</option>
                                                                <option value="6-100">6-10</option>
                                                                <option value="11-15">11-15</option>
                                                                <option value="15plus">15+</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group">
                                                            <label>Please upload your updated CV
                                                                here<sup>*</sup><br />&nbsp;</label>
                                                            <input type="file" name="file" required="required"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group button">
                                                            <button type="submit" class="btn">
                                                                Submit Form
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
=======
            <div class="shaper-condition">
              <h5 class="mb-2">
                APPLICATION PROCESS AND TIMELINE:
              </h5>
              <hr />
              <ul class="mb-3 list-disc">
                <li>
                  <p>
                    <strong>ROUND 1:</strong><br />
                    Online Application: complete the online
                    application form before the announced
                    deadline on our website.
                  </p>
                </li>
                <li>
                  <p>
                    <strong>ROUND 2:</strong><br />Interview
                    - Shortlisted candidates from Round 1
                    will be invited for an interview where
                    current Kathmandu hub leadership team
                    and advisory council members.
                  </p>
                </li>
                <li>
                  <p>
                    <strong>NOTIFICATION:</strong><br />Applicants will be
                    notified of
                    application status via email
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 contact-us">
          <div class="contact-head">
            <div class="inner-content">
              <div class="row align-items-center">
                <div class="col-sm-12">
                  <div class="form-main">
                    <h3 class="inner-title left">
                      BE ONE OF US
                    </h3>
                    <small>Global Shapers Kathmandu Hub
                      reserves the right to reject
                      application at any point without an
                      explanation.</small>
                    <!-- <form class="form become-shaper mt-3" method="post" action="">
                                                                              <div class="row">
                                                                                <div class="col-lg-6 col-12">
                                                                                  <div class="form-group">
                                                                                    <label>Full Name<sup>*</sup></label>
                                                                                    <input name="name" type="text"
                                                                                      placeholder="Full Name" required="required" />
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-12">
                                                                                  <div class="form-group">
                                                                                    <label>Date of Birth<sup>*</sup></label>
                                                                                    <input name="dob" type="date"
                                                                                      placeholder="Date of Birth" required="required" />
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-12">
                                                                                  <div class="form-group">
                                                                                    <label>Email<sup>*</sup></label>
                                                                                    <input name="email" type="email"
                                                                                      placeholder="Your Email" required="required" />
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-12">
                                                                                  <div class="form-group">
                                                                                    <label>Phone Number<sup>*</sup></label>
                                                                                    <input name="phone" type="text"
                                                                                      placeholder="Your Phone" required="required" />
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-12">
                                                                                  <div class="form-group">
                                                                                    <label>Link to your social media
                                                                                      profile<sup>*</sup></label>
                                                                                    <input name="social_url" type="url"
                                                                                      placeholder="Your Socials" required="required" />
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-12">
                                                                                  <div class="form-group">
                                                                                    <label>If you are currently employed, please state
                                                                                      the name of your org<sup>*</sup></label>
                                                                                    <input name="curr_company" type="text"
                                                                                      placeholder="Your current employer"
                                                                                      required="required" />
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-lg-12 col-12">
                                                                                  <div class="form-group">
                                                                                    <label>What is your subject area of expertise? (Eg:
                                                                                      Media, Education, Health, Finance, Business
                                                                                      etc.)<sup>*</sup></label>
                                                                                    <input name="expertise" type="text"
                                                                                      placeholder="Your current employer"
                                                                                      required="required" />
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-lg-12 col-12">
                                                                                  <div class="form-group">
                                                                                    <label>List out your three best skills (seperated by
                                                                                      , )<sup>*</sup></label>
                                                                                    <input name="curr_company" type="text"
                                                                                      placeholder="Your current employer"
                                                                                      required="required" />
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                  <div class="form-group message">
                                                                                    <label for="">Have you been involved in other
                                                                                      group/communities? Have you led or have been a
                                                                                      part of any initiative through the group? Share
                                                                                      your experience (150 words or
                                                                                      less)<sup>*</sup></label>
                                                                                    <textarea name="experience" placeholder="Your Experience" maxlength="650"></textarea>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-lg-12 col-12">
                                                                                  <div class="form-group">
                                                                                    <label>How did you get to know about Global Shapers
                                                                                      Kathmandu Hub? (Mention the name of the person, if
                                                                                      any)<sup>*</sup></label>
                                                                                    <input name="know_from" type="text"
                                                                                      placeholder="Reference" required="required"
                                                                                      list="options" />
                                                                                    <datalist id="options">
                                                                                      <option value="Social Media">
                                                                                      <option value="Kathmandu Hub Website">
                                                                                      <option value="Friend">
                                                                                      <option value="GSKH Event">
                                                                                      <option value="GSKH Member">
                                                                                      <option value="GSKH Alumni">
                                                                                      <option value="Other">
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                  <div class="form-group message">
                                                                                    <label for="">Why do you want to join our community?
                                                                                      (100 words or less)<sup>*</sup></label>
                                                                                    <textarea name="experience" placeholder="Your Cause" maxlength="350"></textarea>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                  <div class="form-group message">
                                                                                    <label for="">Global Shapers are supposed to run
                                                                                      social impact projects in their respective cities.
                                                                                      If you had had the chance to lead a project what
                                                                                      would it be and why?<sup>*</sup></label>
                                                                                    <textarea name="experience" placeholder="Your Thoughts" rows="8"></textarea>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-12">
                                                                                  <div class="form-group">
                                                                                    <label>If selected, how many hours per week will you
                                                                                      be able to commit to hub
                                                                                      activities?<sup>*</sup></label>
                                                                                    <select class="form-select">
                                                                                      <option value="1-5">1-5</option>
                                                                                      <option value="6-100">6-10</option>
                                                                                      <option value="11-15">11-15</option>
                                                                                      <option value="15plus">15+</option>
                                                                                    </select>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-12">
                                                                                  <div class="form-group">
                                                                                    <label>Please upload your updated CV
                                                                                      here<sup>*</sup><br />&nbsp;</label>
                                                                                    <input type="file" name="cv" required="required"
                                                                                      class="form-control" />
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                  <div class="form-group button">
                                                                                    <button type="submit" class="btn">
                                                                                      Submit Form
                                                                                    </button>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                            </form> -->
                    <form class="form become-shaper" method="post" action="{{
                                                route('joinus.store')
                                            }} " enctype="multipart/form-data">
                      @csrf @method('POST')
                      <div class="row">
                        <div class="col-lg-6 col-12">
                          <input type="text" name="fullname" class="question"
                            id="name" required autocomplete="off" />
                          <label for="name"><span>Full
                              Name<sup>*</sup></span></label>
                        </div>
                        <div class="col-lg-6 col-12">
                          <input type="date" name="date_of_birth"
                            class="question" id="dob" required
                            autocomplete="off" />
                          <label for="dob"><span>Date of
                              Birth<sup>*</sup></span></label>
                        </div>
                        <div class="col-lg-6 col-12">
                          <label for="gender"><span
                              style="margin-left:-0.35rem">Gender<sup>*</sup></span></label>
                          <div class="radio_gender d-flex ms-2">
                            <label for="male_option"
                              class="d-flex align-items-center gap-1">
                              <input type="radio" id="male_option" name="gender"
                                tabindex="1" required>
                              <span>Male</span>
                            </label>
                            <label for="female_option"
                              class="d-flex align-items-center gap-1">
                              <input type="radio" id="female_option"
                                name="gender" tabindex="2" required>
                              <span>Female</span>
                            </label>
                            <label for="others_option"
                              class="d-flex align-items-center gap-1">
                              <input type="radio" id="others_option"
                                name="gender" tabindex="3" required>
                              <span>Others</span>
                            </label>
                          </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <input type="text" name="preferred_pronouns"
                            class="question" id="dob" required
                            autocomplete="off" />
                          <label for="dob"><span>Preferred
                              Pronouns<sup>*</sup></span></label>
                        </div>
                        <div class="col-lg-12 col-12">
                          <div class="form-group">
                            <label>Do you identify as a person belonging to any of these groups?<sup>*</sup></label>
                            <div class="d-flex flex-wrap ms-2">
                              <label for="dalit"
                              class="d-flex align-items-center gap-1">
                              <input type="checkbox" id="dalit" name="dalit"
                                tabindex="1" required>
                              <span style="font-size:16px">Dalit</span>
                            </label>
                            <label for="madhesi"
                              class="d-flex align-items-center gap-1">
                              <input type="checkbox" id="madhesi" name="madhesi"
                                tabindex="1" required>
                              <span style="font-size:16px">Madhesi</span>
                            </label>
                            <label for="indigenous_ethnic_group"
                              class="d-flex align-items-center gap-1">
                              <input type="checkbox" id="indigenous_ethnic_group" name="indigenous_ethnic_group"
                                tabindex="1" required>
                              <span style="font-size:16px" class="text-nowrap">Indigenous ethnic group</span>
                            </label>
                            <label for="physical_mental_disabilities"
                              class="d-flex align-items-center gap-1">
                              <input type="checkbox" id="physical_mental_disabilities" name="physical_mental_disabilities"
                                tabindex="1" required>
                              <span style="font-size:16px" class="text-nowrap">Physical or Mental disabilities</span>
                            </label>
                            <label for="religious_minorities"
                              class="d-flex align-items-center gap-1">
                              <input type="checkbox" id="religious_minorities" name="religious_minorities"
                                tabindex="1" required>
                              <span style="font-size:16px" class="text-nowrap">Religious minorities</span>
                            </label>
                            <label for="diverse_gender"
                              class="d-flex align-items-center gap-1">
                              <input type="checkbox" id="diverse_gender" name="diverse_gender"
                                tabindex="1" required>
                              <span style="font-size:16px" class="text-nowrap">and/or Diverse gender</span>
                            </label>
>>>>>>> afe6f2115a00b4bb4e8a088a1b16728cbf85d0d8
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <input type="email" name="email" class="question"
                            id="email" required autocomplete="off" />
                          <label
                            for="email"><span>Email<sup>*</sup></span></label>
                        </div>
                        <div class="col-lg-6 col-12">
                          <input type="text" name="phone" class="question"
                            id="phone" required autocomplete="off" />
                          <label for="phone"><span>Phone
                              Number<sup>*</sup></span></label>
                        </div>
                        <div class="col-lg-12 col-12 mb-4rem mb-lg-0">
                          <input type="text" name="social_media"
                            class="question" id="social_url" required
                            autocomplete="off" />
                          <label for="social_url"><span>Link to your social
                              media profile<sup>*</sup></span></label>
                        </div>
                        <div class="col-lg-12 col-12">
                          <input type="text" name="name_of_organization"
                            class="question full-width-m" id="curr_company"
                            required autocomplete="off" />
                          <label for="curr_company"><span>If you are
                              currently employed,
                              please state the
                              name of your org<sup>*</sup></span></label>
                        </div>
                        <div class="col-lg-12 col-12">
                          <input type="text" name="expertise"
                            class="question full-width-m" id="expertise"
                            required autocomplete="off" />
                          <label for="expertise"><span>What is your
                              subject area of
                              expertise? (Eg:
                              Media, Education,
                              Health, Finance,
                              Business etc.)<sup>*</sup></span></label>
                        </div>
                        <div class="col-lg-12 col-12">
                          <input type="text" name="best_skills"
                            class="question full-width-m" id="skills" required
                            autocomplete="off" />
                          <label for="skills"><span>List out your three
                              best skills
                              (seperated by ,
                              )<sup>*</sup></span></label>
                        </div>
                        <div class="col-lg-12 col-12">
                          <input type="text" name="get_to_know_about"
                            class="question full-width-m" id="know_from"
                            required autocomplete="off" list="options" />
                          <label for="know_from"><span>How did you get to
                              know about Global
                              Shapers Kathmandu
                              Hub? (Mention the
                              name of the person,
                              if any)<sup>*</sup></span></label>
                          <datalist id="options">
                            <option value="Social Media"></option>
                            <option value="Kathmandu Hub Website"></option>
                            <option value="Friend"></option>
                            <option value="GSKH Event"></option>
                            <option value="GSKH Member"></option>
                            <option value="GSKH Alumni"></option>
                            <option value="Other"></option>
                          </datalist>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for=""><span>Have you been
                                involved in
                                other
                                group/communities?
                                Have you led or
                                have been a part
                                of any
                                initiative
                                through the
                                group? Share
                                your experience
                                (150 words or
                                less)<sup>*</sup></span></label>
                            <textarea name="involved_in_other_group"
                              placeholder="Your Experience" maxlength="650"
                              class="form-control"></textarea>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group message">
                            <label for="">Why do you want to
                              join our community?
                              (100 words or
                              less)<sup>*</sup></label>
                            <textarea name="join_our_community"
                              placeholder="Your Cause" maxlength="350"
                              class="form-control"></textarea>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group message">
                            <label for="">Global Shapers are
                              supposed to run
                              social impact
                              projects in their
                              respective cities.
                              If you had had the
                              chance to lead a
                              project what would
                              it be and why?<sup>*</sup></label>
                            <textarea name="chance_to_lead_a_project"
                              placeholder="Your Thoughts" rows="8"
                              class="form-control"></textarea>
                          </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <div class="form-group">
                            <label>If selected, how
                              many hours per week
                              will you be able to
                              commit to hub
                              activities?<sup>*</sup></label>
                            <select name="hours_per_week" class="form-select"
                              style="height: 55px">
                              <option value="1-5">
                                1-5
                              </option>
                              <option value="6-100">
                                6-10
                              </option>
                              <option value="11-15">
                                11-15
                              </option>
                              <option value="15plus">
                                15+
                              </option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <div class="form-group">
                            <label>Please upload your
                              updated CV here<sup>*</sup><br /><small style="color:#808080">(.docx or .pdf only)</small></label>
                            <input type="file" name="file" required="required"
                              class="form-control" />
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group button">
                            <button type="submit" class="btn">
                              Submit Form
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection