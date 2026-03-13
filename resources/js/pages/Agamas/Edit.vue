<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';
import { ArrowLeft, Save } from 'lucide-vue-next';
import AppLayout from '@/layouts/AppLayout.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Textarea } from '@/components/ui/textarea';
import { Checkbox } from '@/components/ui/checkbox';
import { Label } from '@/components/ui/label';

interface Agama {
    id: number;
    nama_agama: string;
    keterangan: string | null;
    is_active: boolean;
}

const props = defineProps<{
    agama: Agama;
}>();

const form = useForm({
    nama_agama: props.agama.nama_agama,
    keterangan: props.agama.keterangan || '',
    is_active: !!props.agama.is_active,
});

const submit = () => {
    form.put(route('agamas.update', props.agama.id));
};
</script>

<template>
    <AppLayout title="Edit Agama">
        <Head title="Edit Agama" />

        <div class="flex h-full flex-1 flex-col gap-4 p-4 md:p-6 lg:p-8">
            <div class="flex items-center gap-4">
                <Button variant="outline" size="icon" as-child>
                    <Link :href="route('agamas.index')">
                        <ArrowLeft class="h-4 w-4" />
                    </Link>
                </Button>
                <h1 class="text-2xl font-bold tracking-tight">Edit Agama: {{ agama.nama_agama }}</h1>
            </div>

            <div class="max-w-2xl rounded-xl border bg-card text-card-foreground shadow-sm">
                <form @submit.prevent="submit" class="p-6 space-y-6">
                    <div class="space-y-2">
                        <Label for="nama_agama">Nama Agama <span class="text-red-500">*</span></Label>
                        <Input 
                            id="nama_agama" 
                            v-model="form.nama_agama" 
                            type="text" 
                            placeholder="Masukkan nama agama" 
                            :disabled="form.processing"
                        />
                        <p v-if="form.errors.nama_agama" class="text-sm font-medium text-destructive">
                            {{ form.errors.nama_agama }}
                        </p>
                    </div>

                    <div class="space-y-2">
                        <Label for="keterangan">Keterangan</Label>
                        <Textarea 
                            id="keterangan" 
                            v-model="form.keterangan" 
                            placeholder="Opsional" 
                            :disabled="form.processing"
                        />
                        <p v-if="form.errors.keterangan" class="text-sm font-medium text-destructive">
                            {{ form.errors.keterangan }}
                        </p>
                    </div>

                    <div class="flex items-center space-x-2">
                        <Checkbox 
                            id="is_active" 
                            :checked="form.is_active" 
                            @update:checked="(val: boolean) => form.is_active = val" 
                            :disabled="form.processing" 
                        />
                        <Label for="is_active">Status Aktif</Label>
                    </div>
                    <p v-if="form.errors.is_active" class="text-sm font-medium text-destructive">
                        {{ form.errors.is_active }}
                    </p>

                    <div class="flex items-center justify-end gap-4 border-t pt-4">
                        <Button type="button" variant="outline" as-child :disabled="form.processing">
                            <Link :href="route('agamas.index')">Batal</Link>
                        </Button>
                        <Button type="submit" :disabled="form.processing">
                            <Save class="mr-2 h-4 w-4" />
                            Simpan Perubahan
                        </Button>
                    </div>
                </form>
            </div>
        </div>
    </AppLayout>
</template>
