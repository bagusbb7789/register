<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';
import { PlusCircle, Pencil, Trash2 } from 'lucide-vue-next';
import AppLayout from '@/layouts/AppLayout.vue';
import { Button } from '@/components/ui/button';
import {
    Table,
    TableBody,
    TableCell,
    TableHead,
    TableHeader,
    TableRow,
} from '@/components/ui/table';

interface Agama {
    id: number;
    nama_agama: string;
    keterangan: string | null;
    is_active: boolean;
}

interface Props {
    agamas: {
        data: Agama[];
        links: any[];
    };
}

defineProps<Props>();

const form = useForm({});

const deleteAgama = (id: number) => {
    if (confirm('Apakah Anda yakin ingin menghapus data agama ini?')) {
        form.delete(route('agamas.destroy', id));
    }
};
</script>

<template>
    <AppLayout title="Daftar Agama">
        <Head title="Agama" />

        <div class="flex h-full flex-1 flex-col gap-4 p-4 md:p-6 lg:p-8">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-bold tracking-tight">Manajemen Agama</h1>
                <Button as-child>
                    <Link :href="route('agamas.create')">
                        <PlusCircle class="mr-2 h-4 w-4" />
                        Tambah Agama
                    </Link>
                </Button>
            </div>

            <div class="rounded-xl border bg-card text-card-foreground shadow-sm">
                <div class="p-0">
                    <Table>
                        <TableHeader>
                            <TableRow>
                                <TableHead class="w-[50px]">ID</TableHead>
                                <TableHead>Nama Agama</TableHead>
                                <TableHead>Keterangan</TableHead>
                                <TableHead>Status</TableHead>
                                <TableHead class="text-right">Aksi</TableHead>
                            </TableRow>
                        </TableHeader>
                        <TableBody>
                            <TableRow v-for="agama in agamas.data" :key="agama.id">
                                <TableCell class="font-medium">{{ agama.id }}</TableCell>
                                <TableCell>{{ agama.nama_agama }}</TableCell>
                                <TableCell>{{ agama.keterangan || '-' }}</TableCell>
                                <TableCell>
                                    <span v-if="agama.is_active" class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-semibold text-green-800 dark:bg-green-900 dark:text-green-300">
                                        Aktif
                                    </span>
                                    <span v-else class="inline-flex items-center rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-semibold text-red-800 dark:bg-red-900 dark:text-red-300">
                                        Nonaktif
                                    </span>
                                </TableCell>
                                <TableCell class="text-right">
                                    <div class="flex justify-end gap-2">
                                        <Button variant="outline" size="icon" as-child>
                                            <Link :href="route('agamas.edit', agama.id)">
                                                <Pencil class="h-4 w-4" />
                                            </Link>
                                        </Button>
                                        <Button variant="destructive" size="icon" @click="deleteAgama(agama.id)">
                                            <Trash2 class="h-4 w-4" />
                                        </Button>
                                    </div>
                                </TableCell>
                            </TableRow>
                            <TableRow v-if="agamas.data.length === 0">
                                <TableCell colspan="5" class="text-center h-24 text-muted-foreground">
                                    Tidak ada data agama.
                                </TableCell>
                            </TableRow>
                        </TableBody>
                    </Table>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
