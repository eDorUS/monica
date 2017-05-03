<div class="sidebar-box">

  <p class="sidebar-box-title">
    <img src="/img/people/dashboard.svg">
    {{ trans('people.section_personal_information') }}
    <a href="/people/{{ $contact->id }}/edit">{{ trans('app.edit') }}</a>
  </p>

  <div class="people-information">
    <ul>

      {{-- Birthdate --}}
      <li>
        <i class="fa fa-birthday-cake"></i>
        @if (is_null($contact->getBirthdate()))
          {{ trans('people.birthdate_not_set') }}
        @else
          {{ $contact->getAge() }} ({{ $contact->getBirthdate()->format('Y-m-d') }})
        @endif
      </li>

      {{-- City --}}
      <li>
        <i class="fa fa-globe"></i>
        @if (is_null($contact->getPartialAddress()))
        {{ trans('people.information_no_address_defined') }}
        @else
        {{ $contact->getPartialAddress() }}
        @endif
      </li>

      {{-- Email address --}}
      <li>
        <i class="fa fa-envelope-open-o"></i>
        @if (is_null($contact->getEmail()))
        {{ trans('people.information_no_email_defined') }}
        @else
        {{ $contact->getEmail() }}
        @endif
      </li>

      {{-- Phone --}}
      <li>
        <i class="fa fa-volume-control-phone"></i>
        @if (is_null($contact->getPhone()))
        {{ trans('people.information_no_phone_defined') }}
        @else
        {{ $contact->getPhone() }}
        @endif
      </li>
    </ul>
  </div>

</div>