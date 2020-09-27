<template>
    <v-app>
        <v-main>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <v-select
                            :items="selectOptions.gender_options"
                            label="Genero"
                            outlined
                            v-model="user.fk_id_gender"
                        ></v-select>
                    </div>
                </div>
            </div>
            <v-bottom-navigation
                v-model="page"
                :background-color="color"
                dark
                shift
            >
                <v-btn>
                    <span>Primera parte</span>

                    <v-icon>mdi-account-box</v-icon>
                </v-btn>

                <v-btn>
                    <span>Segunda Parte</span>

                    <v-icon>mdi-google-maps</v-icon>
                </v-btn>
            </v-bottom-navigation>
        </v-main>
    </v-app>
</template>

<script>
    export default {
        name: "RegisterForm",
        created() {
            this.URL_GET_SELECTS = document
                .getElementById('inp-url-selects')
                .value;

            axios.get(this.URL_GET_SELECTS)
                .then((response) => {
                    console.log(response);

                    this.selectOptions = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        data: function(){
            return {
                page: 0,
                user: {
                  fk_id_gender: 0
                },
                selectOptions: {
                    gender_options: null,
                    role_options: null
                }
            };
        },
        computed: {
            color() {
                switch (this.page) {
                    case 0:
                        return 'blue-grey'
                    case 1:
                        return 'teal'
                    case 2:
                        return 'brown'
                    case 3:
                        return 'indigo'
                    default:
                        return 'blue-grey'
                }
            },
        }
    }
</script>

<style scoped>

</style>
