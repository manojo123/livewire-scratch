<div>
	<div class="row">
		@if ($successMessage)
			<div class="col-12 alert alert-success">
				<span class="pull-left">{{ $successMessage }}</span>
				<button type="button" wire:click="$set('successMessage', null)" class="close float-right">&times;</button>
			</div>
		@endif
		<div class="col-5 text-gray-600 bg-gray-100 p-4">
			<h2 class="text-2xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-3xl sm:leading-9">
				Contact Form
			</h2>

			<p class="text-justify">
				Lorem ipsum madic isabig daniors, cingaro. Macoc isamut bigar
				daniors. Macocan hualquam rig trudedor, uitam filam supior itisa
				gotiul iscrima mibaque foramor. Colinde niale uere dacru elregu
				isamoquim cingaro, cingaro, cigar. Machitisti quimus beta daniors,
				mastinquis rigui dolto daflore uit a fila sopior itisa gotiul
				comimba queformor. Singaro.
			</p>

			<p>
				Calle 1, 100 Lima<br>
				Lima - Peru
			</p>

			<p>test@example.com</p>

			<p>+51 99123-4567</p>

			<p class="">
				¿Estás entendiendo algo? 
				<b><a href="https://www.youtube.com/watch?v=erMYt-Ztmdw" target="_blank">¡Haz click aquí!</a></b>
			</p>
		</div>
		<div class="col-7">
			<form method="POST" wire:submit.prevent="submitForm">
				<div class="form-group">
					<input 
						type="text" 
						wire:model.lazy="name" 
						name="name" 
						class="form-control @error('name') is-invalid @enderror" 
						placeholder="Name">
					@error('name')<span class="text-sm text-danger">{{ $message }}</span>@enderror
				</div>

				<div class="form-group mt-4">
					<input 
						type="text" 
						wire:model.lazy="email" 
						name="email" 
						class="form-control @error('email') is-invalid @enderror" 
						placeholder="Email">
					@error('email')<span class="text-sm text-danger">{{ $message }}</span>@enderror
				</div>

				<div class="form-group mt-4">
					<input 
						type="text" 
						wire:model.lazy="phone" 
						name="phone" 
						class="form-control @error('phone') is-invalid @enderror" 
						placeholder="Phone">
					@error('phone')<span class="text-sm text-danger">{{ $message }}</span>@enderror
				</div>

				<div class="form-group mt-4">
					<textarea 
						wire:model.lazy="message" 
						name="message" 
						placeholder="Message"
						class="form-control @error('message') is-invalid @enderror"
						rows="5"></textarea>
					@error('message')<span class="text-sm text-danger">{{ $message }}</span>@enderror
				</div>

				<div class="form-group mt-2">
					<button 
						type="submit" 
						class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150 cursor-not-allowed disabled:opacity-50">
						<svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
							<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
							<path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
						</svg>
						Submit
					</button>
					<button 
						type="reset" 
						wire:click="resetForm"
						class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-gray-600 hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700 transition ease-in-out duration-150 cursor-not-allowed disabled:opacity-50">
						Reset
					</button>
				</div>
			</form>
		</div>
	</div>
</div>