<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
            {{-- 
                <div class="row">
                    <div class="col-12 alert alert-success">
                        <span class="pull-left">Successful Message.</span>
                        <button type="button" class="close float-right">&times;</button>
                    </div>
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

                        <p>
                            ¿Estás entendiendo algo? 
                            <b><a href="https://www.youtube.com/watch?v=erMYt-Ztmdw" target="_blank">Haz click aquí</a></b>
                        </p>
                    </div>
                    <div class="col-7">
                        <form method="POST">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control is-invalid" placeholder="Name">
                                <span class="text-sm text-danger">Name is required.</span>
                            </div>

                            <div class="form-group mt-4">
                                <input type="text" id="email" name="email" class="form-control is-invalid" placeholder="Email">
                                <span class="text-sm text-danger">Email is required.</span>
                            </div>

                            <div class="form-group mt-4">
                                <input type="text" id="phone" name="phone" class="form-control is-invalid" placeholder="Phone">
                                <span class="text-sm text-danger">Phone is required.</span>
                            </div>

                            <div class="form-group mt-4">
                                <textarea id="message" name="message" placeholder="Message" rows="5" cols="100" maxlength="999" class="form-control is-invalid"></textarea>
                                <span class="text-sm text-danger">Message is required.</span>
                            </div>

                            <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150 cursor-not-allowed disabled:opacity-50">
                                <!-- <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg> -->
                                Submit Form
                            </button>
                        </form>
                    </div>
                </div>
             --}}
                <livewire:contact-form />
            </div>
        </div>
    </div>
</x-app-layout>