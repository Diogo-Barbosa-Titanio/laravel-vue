<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-2 mb-2">
                <div class="card">
                    <div class="card-header">Exemplo de Componente</div>

                    <div class="card-body">
                        Eu sou um exemplo de componente em Vue no Laravel.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component Vue mounted.')
        }
    }
</script>
