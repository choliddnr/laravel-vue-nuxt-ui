<script setup lang="ts">
import * as z from "zod";
import type { FormSubmitEvent } from "@nuxt/ui";
import { router } from "@inertiajs/vue3";

const toast = useToast();

const fields = [
    {
        name: "name",
        type: "text" as const,
        label: "Name",
        placeholder: "Enter your name",
        required: true,
    },
    {
        name: "username",
        label: "Username",
        type: "text" as const,
        placeholder: "Enter your username",
    },
    {
        name: "job",
        label: "Job",
        type: "text" as const,
        placeholder: "Enter your job",
    },
    {
        name: "email",
        type: "text" as const,
        label: "Email",
        placeholder: "Enter your email",
        required: true,
    },
    {
        name: "password",
        label: "Password",
        type: "password" as const,
        placeholder: "Enter your password",
    },
    {
        name: "confirmation",
        label: "Password Confirmation",
        type: "password" as const,
        placeholder: "Retype your password",
    },
];

const providers = [
    {
        label: "Google",
        icon: "i-simple-icons-google",
        to: "/auth/google/redirect",
        onClick: () => {
            toast.add({ title: "Google", description: "Login with Google" });
        },
    },
];

const schema = z
    .object({
        name: z.string().min(3, "Must be at least 3 characters"),
        username: z.string().min(3, "Must be at least 3 characters"),
        job: z.string().min(3, "Must be at least 3 characters"),
        email: z.string().email("Invalid email"),
        password: z.string().min(3, "Must be at least 8 characters"),
        confirmation: z.string().min(3, "Must be at least 8 characters"),
    })
    .refine((data) => data.password === data.confirmation, {
        message: "Passwords don't match",
        path: ["pasword", "confirmation"],
    });

type Schema = z.output<typeof schema>;

function onSubmit(payload: FormSubmitEvent<Schema>) {
    console.log("Submitted", payload);
}
</script>

<template>
    <UApp>
        <div class="flex flex-col items-center justify-center gap-4 p-4">
            <UPageCard class="w-full max-w-md">
                <UAuthForm
                    :schema="schema"
                    :fields="fields"
                    :providers="providers"
                    title="Welcome back!"
                    icon="i-lucide-lock"
                    description="Create an account"
                    @submit="onSubmit"
                >
                    <template #description>
                        Already have an account?
                        <ULink
                            to="/login"
                            class="text-(--ui-primary) font-medium"
                            >Login</ULink
                        >.
                    </template>
                    <!-- <template #password-hint>
                        <ULink
                            to="#"
                            class="text-(--ui-primary) font-medium"
                            tabindex="-1"
                            >Forgot password?</ULink
                        >
                    </template> -->
                    <!-- <template #validation>
                        <UAlert
                            color="error"
                            icon="i-lucide-info"
                            title="Error signing in"
                        />
                    </template> -->
                    <template #footer>
                        By signing in, you agree to our
                        <ULink to="#" class="text-(--ui-primary) font-medium"
                            >Terms of Service</ULink
                        >.
                    </template>
                </UAuthForm>
            </UPageCard>
        </div>
    </UApp>
</template>
