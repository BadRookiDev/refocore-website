@if($above)
    <li>
        <hr class="bg-neutral"/>
        <div class="timeline-start timeline-box lg:max-w-[120px] xl:max-w-[180px]">{!! $event !!}</div>
        <div class="timeline-middle">
            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    class="h-5 w-5 {{$fillClass}}">
                <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                        clip-rule="evenodd" />
            </svg>
        </div>
        <div class="timeline-end font-semibold">{{ $year }}</div>
        <hr class="bg-neutral"/>
    </li>
@else
    <li>
        <hr class="bg-neutral"/>
        <div class="timeline-start font-semibold">{{ $year }}</div>
        <div class="timeline-middle">
            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    class="h-5 w-5 {{$fillClass}}">
                <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                        clip-rule="evenodd" />
            </svg>
        </div>

        <div class="timeline-end timeline-box lg:max-w-[120px] xl:max-w-[180px]">
            {!! $event !!}
        </div>

        <hr class="bg-neutral"/>
    </li>
@endif