
import { AuthenticationForm, } from '../components/AuthenticationForm/AuthenticationForm';
import { Box,Center } from '@mantine/core';
import { useRouter } from 'next/router';
import { useAuth } from '../hooks/auth'
export default function Login() {
  const router = useRouter()

  const { login } = useAuth({
      middleware: 'guest',
      redirectIfAuthenticated: '/dashboard',
  })
  return (
    <Center style={{ height: 700 }}>
      <Box  sx={(theme) => ({
        textAlign: 'center',
        padding: theme.spacing.xl,
        borderRadius: theme.radius.md,
        width: '600px',
      })}><AuthenticationForm />
      </Box>
  </Center>
  
  );
}
