

<div class="container">
    <div  class="row justify-content-center form-bg-image">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                <div class="text-center text-md-center mb-4 mt-md-0">
                    <img src="{{ asset('images/logo.png') }}" alt="Grupo Peninsular de Hoteles" style="margin-bottom:1rem;">
                    <p class="mb-0">Llena los siguiente campos:</p>
                </div>
                <form  method="POST" action="{{ route('store.user',['locale'=>'es']) }}" class="mt-4">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="email">Colaborador</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <span class="material-symbols-outlined">
                                    person
                                </span>
                            </span>
                            <input type="text" class="form-control"
                                placeholder="John Doe" id="name" name="name" autofocus required>
                        </div>
                        @error('name') <div class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="email">Correo Electrónico</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><svg
                                    class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                    </path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg></span>
                            <input type="email" class="form-control"
                                placeholder="example@company.com" id="email" name="email" required>
                        </div>
                        @error('email') <div class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <div class="form-group mb-4">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon2"><svg
                                        class="icon icon-xs text-gray-600" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd"></path>
                                    </svg></span>
                                <input type="password" placeholder="Password"
                                    class="form-control" id="password" name="password" required>
                            </div>
                            @error('password') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group mb-4">
                            <label for="password">Confirma Password</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon2"><svg
                                        class="icon icon-xs text-gray-600" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd"></path>
                                    </svg></span>
                                <input type="password" placeholder="Password"
                                    class="form-control" id="confirm_password" name="confirm_password" required>
                            </div>
                            @error('confirm_password') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group mb-4">
                            <label for="password">Rol</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon2"><svg
                                        class="icon icon-xs text-gray-600" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd"></path>
                                    </svg></span>
                                    <select name="rol" id="rol" class="form-control">
                                        <option value="gerente">Gerente</option>
                                        <option value="supervisor">Supervisor</option>
                                        <option value="colaborador">Colaborador</option>
                                    </select>
                            </div>
                            @error('rol') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group mb-4">
                            <label for="password">Hoteles</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon2"><svg
                                        class="icon icon-xs text-gray-600" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd"></path>
                                    </svg></span>
                                    <select name="hoteles" id="hoteles" class="form-control">
                                        <option value="default">Selecciona ...</option>
                                        <option value="all-hoteles">Todos los Hoteles</option>
                                        <option value="adhara-cancun">Hotel Adhara Cancun</option>
                                        <option value="adhara-express">Hotel Adhara Express</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="departamento-group">
                        <div class="form-group mb-4">
                            <label for="password">Departamento</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon2"><svg
                                        class="icon icon-xs text-gray-600" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd"></path>
                                    </svg></span>
                                    <select name="departamento" id="departamento" class="form-control">
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="habilidades-group">
                        <div class="form-group mb-4">
                            <label for="password">Habilidades</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon2"><svg
                                        class="icon icon-xs text-gray-600" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd"></path>
                                    </svg></span>
                                    <select name="habilidades" id="habilidades" class="form-control">
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-gray-800">Dar de Alta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){

        $('#rol').on('change', function() {

            if ($("#rol").val() == 'gerente') {

                $('#departamento').val('default');
                $("#departamento-group").css('display','none');

                $('#habilidades').val('ninguna');
                $("#habilidades-group").css('display','none');
            }

            if ($("#rol").val() == 'supervisor') {
                $('#habilidades').val('ninguna');
                $("#habilidades-group").css('display','none');
            }
            
            $("#hoteles").val("default").change();
            
        });

        $('#hoteles').on('change', function() {
            
            console.log( this.value );
            
            if ( $("#rol").val() == 'supervisor' || $("#rol").val() == 'colaborador' ) {
                var template = '<option value="default">Selecciona ...</option>' +
                '<option value="marketing">Marketing</option>' +
                '<option value="ventas">Ventas</option>' +
                '<option value="reservas">Reservas</option>';
                $('#departamento').html('');
                $('#departamento').append(template);
                $("#departamento-group").css('display','block');
            }
            
            if ( $("#rol").val() == 'colaborador') {
                var template = '<option value="ninguna">Ninguna</option>' +
                '<option value="edicion">Actualizar</option>' +
                '<option value="creacion">Crear</option>' +
                '<option value="eliminacion">Eliminar</option>';
                $('#habilidades').html('');
                $('#habilidades').append(template);
                $("#habilidades-group").css('display','block');
            }

        });

    });
</script>

