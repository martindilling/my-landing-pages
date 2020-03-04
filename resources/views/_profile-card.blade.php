<?php
/**
 * @var string $color
 * @var string $avatar
 * @var string $eyebrow
 * @var string $title
 * @var string $text
 * @var array $links
 */
$color = $color ?? 'grey';
?>

<div class="max-w-md w-full sm:flex rounded shadow-lg mx-4 border-t-4 border-{{ $color }}">
	<div
		class="h-64 sm:h-auto sm:w-48 flex-none bg-cover bg-grey sm:rounded-bl text-center overflow-hidden"
		style="background-position: center center;background-image: url({{ $avatar }})"
	>
	</div>
	<div class="bg-white rounded-b sm:rounded-b-none sm:rounded-br p-6 flex flex-col justify-between leading-normal">
		<div class="">
			<p class="text-sm text-{{ $color }}-light flex items-center">
				{{ $eyebrow }}
			</p>
			<div class="text-{{ $color }}-darker font-bold mb-2">
				{{ $title }}
			</div>
			<p class="text-grey-darker text-base">
				{{ $text }}
			</p>
		</div>
		@if(isset($links))
			<div class="flex flex-wrap items-center justify-center text-xs uppercase mt-6">
				@foreach($links as $value => $link)
					<a href="{{ $link }}" class="no-underline tracking-wide text-grey hover:text-grey-darker font-bold px-3 py-1">
						{{ $value }}
					</a>
				@endforeach
			</div>
		@endif
		@if(isset($projects))
			<div class="flex flex-wrap items-center justify-center text-xs uppercase mt-2 pt-2 border-t border-indigo-lightest">
				@foreach($projects as $value => $link)
					<a href="{{ $link }}" target="_blank" class="no-underline tracking-wide text-grey hover:text-grey-darker font-bold px-3 py-1">
						{{ $value }}
					</a>
				@endforeach
			</div>
		@endif
	</div>
</div>
