<template>
    <b-container>
        <b-form class="m-3" action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" v-model="csrfToken">
            <b-form-group label="Correo electrónico:">
                <b-form-input type="email" disabled
                            name="email"
                            v-model="user.email"
                            placeholder="Ingresa tu correo">
                </b-form-input>
            </b-form-group>
            <b-form-group label="Nombre:">
                <b-form-input type="text" required
                            name="name"
                            v-model="user.name"
                            placeholder="Ingresa tu nombre">
                </b-form-input>
            </b-form-group>

            <b-form-group label="Nueva contraseña (sólo si se desea modificar):">
                <b-form-input type="password" name="password"
                            placeholder="Ingresa una nueva contraseña">
                </b-form-input>
            </b-form-group>

            <b-form-group label="Imagen de perfil:">
                <b-img :src="image" rounded="circle" width="150" height="150" alt="Imagen de perfil (sólo si se desea modificar):" 
                title="Imagen actual" class="m-1" />

                <b-form-file name="image" placeholder="Selecciona una nueva imagen de perfil"/>
            </b-form-group>

            

            <b-button type="submit" variant="primary">Guardar cambios</b-button>
        </b-form>
    </b-container>
</template>

<script>
export default {
    props:{
        user: Object,
        csrfToken: String
    },
    data () {
        return {
        }
    },
    methods: {
    },
    computed:{
        image(){
            return `/users/${this.user.image}`;
        }
    }
}
</script>